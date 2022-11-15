<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmail;

class EmailController extends Controller
{
    public function emailPage(){
        return view('email.emailform');
    }

    public function sendEmail(Request $request){
        // dd($request->all());

        ini_set('max_execution_time', 600);

        $data["email"] = $request->input('email');
        $data["name"] = $request->input('name');
        $data["subject"] = $request->input('subject');
        $data["message"] = $request->input('message');
        $data["docname"] = 'Little Trip Invoice.pdf';
        SendEmail::dispatchAfterResponse($data);

        // return redirect()->route('mail-page');
        return response()->json(['Great! Successfully send to your mail inbox']);
    }
}

