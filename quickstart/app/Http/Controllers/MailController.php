<?php

namespace durgesh\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use durgesh\Http\Requests;

class MailController extends Controller {
   public function basic_email(){
      $data = array('name'=>"durgesh ahirwar");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('durgesh.ahirwar@systematixindia.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('durgesh.ahirwar@systematixindia.com','durgesh ahirwar');
      });
      echo "Basic Email Sent. Check your inbox.";
   }

   public function html_email(){
      $data = array('name'=>"Durgesh ahirwar");
      Mail::send('mail', $data, function($message) {
         $message->to('durgesh.ahirwar@systematixindia.com', 'test mail')->subject
            ('Laravel HTML Testing Mail');
         $message->from('durgesh.ahirwar@systematixindia.com','Durgesh ahirwar');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   
   public function attachment_email(){
      $data = array('name'=>"Durgesh ahirwar");
      Mail::send('mail', $data, function($message) {
         $message->to('durgesh.ahirwar@systematixindia.com', 'test mail')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('durgesh.ahirwar@systematixindia.comm','durgesh ahirwar');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}