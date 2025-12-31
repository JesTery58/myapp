<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function basic(){
        $contents = file_get_contents(realpath(dirname(__LINE__) . '/../.env.example'));
        $contents = str_replace('%MAIL_DRIVER%','smtp', $contents);
        $contents = str_replace('%MAIL_DRIVER%','smtp', $contents);
        file_put_contents(realpath(dirname(__LINE__) . '/../.env'), $contents);
        dump($contents); die();
        $data = array('name'=>"Virat Gandhi");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('ramazandemirmail@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
            $message->from('kemal@modaroman.com','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function html_email(){
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox.";
    }
    public function attachment_email(){
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}