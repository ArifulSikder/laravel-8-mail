<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;
class MailController extends Controller
{
   function mailIndex(){
      return view('mail');
   }
   function mail(Request $request){
        $data = array(
          'email' => $request->email,
          'subject' => $request->subject,
          'body' => $request->body
        );
        $emails =[];
        Mail::send('MailContent', ['data' => $data], function($message) use ($data, $emails) {
          $message->from('arifulsikder62@gmail.com', 'Ariful Islam Noyon');
         //  foreach ($emails as $email) {
         //     $message->to($email);
         //  }
          $message->to($data['email']);
         //  $message->cc($data['email']);
         //  $message->bcc($data['email']);
          $message->subject($data['subject']);
        });
       return redirect()->back();
   }
   function mailSend(){
    // return 'Mail send';
    // die;
       $setup = [
           'title'=> 'hi, this mail for test.',
           'body' => 'hi, this this test mail body.'
       ];
    //    $user['to'] = 'arifulsikder62@gmail.com';
    //    Mail::send('mail', $setup, function($messages) use ($user){
    //     $messages->to($user['to']);
    //     $messages->subject("hi subject");
    //    });
    //    return 'Mail send';
    mail::to("mdislamnoyon3@gmail.com")->send(new MailSend($setup));
    return 'Mail send';

    // $data = array(
    //     'email' => 'arifulsikder62@gmail.com',
    //     'subject' => 'arifulsikder62@gmail.com',
    //     'mailbody' => 'arifulsikder62@gmail.com'
    //   );
  
    //   Mail::send('mail', $data, function($message) use ($data) {
    //     $message->from($data['email']);
    //     $message->to('arifulsikder62@gmail.com');
    //     $message->subject($data['subject']);
    //   });

    //   $user = 'arifulsikder62@gmail.com';
    //   Notification::send($user, new EmailNotification());
    //   Notification::route('mail', $user)->notify(new EmailNotification());
      return 'Mail send';
   }
}
