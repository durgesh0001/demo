<?php

namespace durgesh\Http\Controllers;

use Illuminate\Http\Request;

use durgesh\Http\Requests;

class ImplicitController extends Controller {
   private $myclass;
   
   // public function __construct(\MyClass $myclass){
   //    $this->myclass = $myclass;
   // }
   public function index(){
      dd($this->myclass);
   }
    public function index2(\MyClass $myclass){
      dd($myclass);
   }
}
