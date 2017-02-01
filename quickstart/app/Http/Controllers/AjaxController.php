<?php

namespace durgesh\Http\Controllers;

use Illuminate\Http\Request;

use durgesh\Http\Requests;

class AjaxController extends Controller {
   public function index(){
      $msg = "This is a simple message.";
$array['msg']=$msg;
echo json_encode($array);
   }
}
