<?php

namespace durgesh\Http\Controllers;
use Illuminate\Http\Request;
use durgesh\Http\Requests;
use durgesh\Http\Controllers\Controller;

class ValidationController extends Controller {
   public function showform(){
       return view('login');
   }
   public function validateform(Request $request){
      print_r($request->all());
      $this->validate($request,[
         'username'=>'required|max:8',
         'password'=>'required'
      ]);
   }
}