<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 11-Mar-19
 * Time: 09:39 AM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
class SendMailController extends FrontEndController
{

    public function showContactForm()
    {
        return view('pages.user.contact', $this->data);
    }
    public function sendMail(Request $request)
    {
        \Mail::send('pages.user.dynamic_mail_template',[
            'message_customer'=>$request->get('mail_customer_message'),
            'name_customer'=>$request->get('mail_customer_name')],
            function($mail)use($request){
        $mail->from($request->get('mail_customer_email'));
        $mail->to('nikola.pusonja.9.15@ict.edu.rs')->subject('Customer Enquiry');
        });
        return  back()->with('message', 'Thanks for contacting us!');
    }
}