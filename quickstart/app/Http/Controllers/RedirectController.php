<?php

namespace durgesh\Http\Controllers;

use Illuminate\Http\Request;

use durgesh\Http\Requests;

class RedirectController extends Controller {
   public function index(){
      echo "Redirecting to controller's action.";
   }
}
