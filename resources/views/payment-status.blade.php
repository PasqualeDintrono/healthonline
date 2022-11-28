<x-landing>
    <x-slot name="title">Payment status</x-slot>

     <!-- Specifications 1 section -->
     <section class="w-full py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full py-12 lg:px-28 px-8">
                @if (Session::has('end_error'))
                    <div class="bg-purple-900 p-8 text-white text-center">
                        {{ Session::get('end_error') }}
                        <br/>
                        If you have any questions, feel free to <a class="cursor-pointer underline" href="{{ route('landing.try') }}">get in touch</a> with us!
                    </div>
                    {{ Session::forget('end_error') }}
                @elseif (Session::has('end_success'))
                    <div class="bg-purple-900 p-8 text-white text-center">
                        {{ Session::get('end_success') }}
                        <br/>
                        The Krill team will get in touch with you as soon as your Krill instance will be ready (usually 1-2 working days).
                        <br/>
                        Thank you for your purchase!
                    </div>
                    {{ Session::forget('end_success') }}
                @elseif (Session::has('renew_success'))
                    <div class="bg-purple-900 p-8 text-white text-center">
                        {{ Session::get('renew_success') }}
                        <br/>
                        Your new activation code has been sent to your email address.
                        <br/>
                        Thank you for your purchase!
                    </div>
                    {{ Session::forget('reew_success') }}
                @else
                    <div class="bg-purple-900 p-8 text-white text-center">
                       Do you want to buy a Krill licence?
                       <br/>
                       You can get one <a class="cursor-pointer underline" href="{{ route('landing.pricing') }}">here</a>
                    </div>
                @endif 
            </div>
        </div>
    </section>
</x-landing>