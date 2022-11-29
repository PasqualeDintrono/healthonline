<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewPurchaseMail;
use App\Mail\ThankYouPurchaseMail;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function createTransaction(Request $request)
    {
         // Validation
         $this->validate($request, [
            'plan' => 'required',
        ]);
        $plan = $request->post('plan');
        $amount = ($plan == 'enterprise') ? 8 : 12;
        return view('new-licence', compact('plan', 'amount'));
    }

    public function processTransaction(Request $request)
    {
        $amount = $request->post('amount');

        // Save the submitted form data an array. They will be passed to the thank you page as GET params
        $checkout_values = array(
            'first' => $request->post('first-name'),
            'last' => $request->post('last-name'),
            'email' => $request->post('email'),
            'phone' => $request->post('phone'),
            'add1' => $request->post('address-1'),
            'add2' => $request->post('address-2'),
            'zip' => $request->post('zip'),
            'city' => $request->post('city'),
            'country' => $request->post('country'),
            'domain' => $request->post('domain'),
            'plan' => $request->post('plan'),
            'type' => $request->post('type'),
        );

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction', $checkout_values),
                "cancel_url" => route('cancelTransaction', $checkout_values),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $amount
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('endTransaction')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('endTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function successTransaction(Request $request)
    {
        // Get all data from get parameters
        $first_name = $request->first;
        $last_name = $request->last;
        $email = $request->email;
        $address_1 = $request->add1;
        $address_2 = $request->add2;
        $zip = $request->zip;
        $city = $request->city;
        $country = $request->country;
        $phone = $request->phone;
        $plan = $request->plan;
        $type = $request->type;

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Invia una mail al cliente e una mail all'amministratore.
            $email_values = [
                'first' => $first_name,
                'last' => $last_name,
                'email' => $email,
                'phone' => $phone,
                'add1' => $address_1,
                'add2' => $address_2,
                'zip' => $zip,
                'city' => $city,
                'country' => $country,
                'plan' => $plan,
                'type' => $type,
            ];
            Mail::to('amministrazione@healthonline.com')->send(new NewPurchaseMail($email_values));

            Mail::to($email)->send(new ThankYouPurchaseMail($email_values));

            $request->session()->put('end_success', $first_name . ', your payment has been received.');
            return redirect()->route('paymentStatus')->with('first_name');
        } else {
            $request->session()->put('end_error', 'An error occurred. Sorry!');
            //Session::flash('error', $response['message'] ?? 'Undefined error.');
            return redirect()->route('paymentStatus');/* ->with('first_name') */;
        }
    }

    public function cancelTransaction(Request $request)
    {
        $first_name = $request->first;
        $request->session()->put('end_error', $first_name . ', your transaction has been cancelled.');
        return redirect()
            ->route('paymentStatus');
            /* ->with('error', $response['message'] ?? 'You have canceled the transaction.'); */
    }
}
