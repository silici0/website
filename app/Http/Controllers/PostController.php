<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Mail;
use Log;

class PostController extends Controller
{
    public function enviaContato(Request $request) {
        $lead = $request->all();
        Mail::to('silici0@gmail.com')->send(new SendEmail($lead));
        
        return redirect()->route('tpok');
    }

}
