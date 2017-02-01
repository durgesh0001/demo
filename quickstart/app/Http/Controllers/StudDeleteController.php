<?php

namespace durgesh\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use durgesh\Http\Requests;

class StudDeleteController extends Controller {

   public function destroy($id) {
      DB::delete('delete from student where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href="/edit-records">Click Here</a> to go back.';
   }
}