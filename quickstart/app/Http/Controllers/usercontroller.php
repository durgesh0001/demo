<?php

namespace durgesh\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use durgesh\Http\Requests;
use durgesh\User3;

class usercontroller extends Controller {
   /**
   * Responds to requests to GET /test
   */
   public function getIndex(){
  //  	echo csrf_token();

      return view('user/adduser');
   
   }
   
   /**
   * Responds to requests to GET /test/show/1
   */
   public function getShow($id){
      echo 'show method';
   }
   public function getEdit()
   {
         return view('user/edituser');

   }
      public function getDelete()
   {
         return view('user/deleteuser');

   }
   
   /**
   * Responds to requests to GET /test/admin-profile
   */
   public function getAdminProfile(){
   	

       header("Access-Control-Allow-Origin: *");   

   
           $users = User3::all();


    $success=array('status'=>1,'message'=>"success",'post'=>$users);
    $failure=array('status'=>0,'message'=>"failure");
    
     
        
           if($users)
           {
            echo json_encode($success);
           }
           else
           {
          
          echo json_encode($failure);

           }
   }
   
   /**
   * Responds to requests to POST /test/profile
   */
     public function postEdit(Request $request){
      header("Access-Control-Allow-Origin: *");  
       $id = $request->input('id');

 $name = $request->input('name');




  $address = $request->input('address');

 $phone = $request->input('phone');

  $dob = $request->input('dob');
  


    $success=array('status'=>1,'message'=>"success");
    $failure=array('status'=>0,'message'=>"failure");
    


     


          $user = User3::find($id);


 $user->name = $name;
 $user->address= $address;
 $user->phone= $phone;
 $user->dob= $dob;
 $user=$user->save();
                    if($user)
           {
            echo json_encode($success);
           }
           else
           {
          
          echo json_encode($failure);

           }
         


         
        
    

  
   }
      public function postDelete(Request $request){
      header("Access-Control-Allow-Origin: *");  

 $id = $request->input('id');




    $success=array('status'=>1,'message'=>"success");
    $failure=array('status'=>0,'message'=>"failure");
    
$user = User3::find($id);
    $count = User3::where('id',$id)->count(); 
    if($count>0)
    {
      $user=$user->delete();
    echo json_encode($success);
    }
    else
    {
        echo json_encode($failure);
    }

   }
   public function postNew(Request $request){
      header("Access-Control-Allow-Origin: *");  

 $name = $request->input('name');


 $email = $request->input('email');
 $username = $request->input('username');

  $address = $request->input('address');

 $phone = $request->input('phone');

  $dob = $request->input('dob');
  
      $array=array('name'=>$name,'email'=>$email,'username'=>$username,'dob'=>$dob,'address'=>$address,'phone'=>$phone);


    $success=array('status'=>1,'message'=>"success");
    $failure=array('status'=>0,'message'=>"failure");
    
   $count = User3::where('email',$email)->count(); 
         $count2 = User3::where('username', $username)->count();

         if($count>0)
         {
          $failure=array('status'=>0,'message'=>"Email is already exits");
          echo json_encode($failure);

         }
         else if($count2>0)
         {
        $failure=array('status'=>0,'message'=>"Username is already exits");
        echo json_encode($failure);
         }
         else
         {
             $user = User3::create($_POST);
                    if($user)
           {
            echo json_encode($success);
           }
           else
           {
          
          echo json_encode($failure);

           }
         }


         
        
    

  
   }
}

