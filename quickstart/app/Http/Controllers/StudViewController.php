<?php

namespace durgesh\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use durgesh\Http\Requests;

class StudViewController extends Controller {
   public function index(){
      $users = DB::select('select * from student');
      return view('stud_view',['users'=>$users]);
   }
}