<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    //
    public function show_formemail(Request $request)
    {
        /* $subject = "Tuan Marketing Email";
         $to = "tuannguyen.dev07@gmail.com";
         Mail::send('emails.UserNotify', ['content' => 'Demo', 'logo' =>'','title' => '33333', 'branch_name' => 'Tuan Demo'], function ($message) use ($subject, $to){
             $message->from('tuannguyen0719@gmail.com', 'Demo Email');
             $message->to($to);
             $message->subject($subject);
         });*/
        return view('email_form');
    }

    public function postsendemail(Request $request)
    {


        try {
            $emailTemplate = $request->input('emailtemplate');
            $emailTo = $request->input('emailto');
            $subject =  $request->input('subject');
            //send verification code
            Mail::send('emails.UserNotify', ['body' => $emailTemplate], function ($message) use ($subject, $emailTo) {
                $message->from('tuannguyen0719@gmail.com', 'Walter Nguyen System');
                $message->to($emailTo);
                $message->subject($subject);
            });
            return redirect('/sendemail');

        } catch (Exception $ex) {
            return Response::json(['code' => 200, 'msg' => 'Something went wrong, please try later.']);
        }
    }
}
