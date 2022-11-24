<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPost (Request $request){
        
        dd($request);
        
        /* $validated = $request->validate([
            
            'title' => 'required',
            'email' => 'required',
            'message' => 'required',
            'acceptance' => 'required'

             
        ]); */

        $details_message = [
            "name" => $request->name
            "email" => $request->email
         ];

    }



}