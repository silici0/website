<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Mail;
use Log;

class PostController extends Controller
{
    public function enviaContato(Request $request) {
        Log::info("Ciclo de request sem Queues inicio");
        $lead = $request->all();
        var_dump($lead);
        Mail::to('silici0@gmail.com')->send(new SendEmail($lead));
        if( count(Mail::failures()) > 0 ) {

   echo "There was one or more failures. They were: <br />";

   foreach(Mail::failures() as $email_address) {
       echo " - $email_address <br />";
    }

} else {
    echo "No errors, all sent successfully!";
}
        Log::info("Ciclo de request sem Queues fim");
    }

}
