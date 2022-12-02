<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PublicController extends Controller
{
    public function locale($locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
