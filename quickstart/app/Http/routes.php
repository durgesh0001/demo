<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/durgesh', function () {
    return view('durgesh');
});
Route::get('durgesh/{id}',function($id){
   echo 'ID: '.$id;
});
Route::get('/user/{name?}',function($name = 'Virat'){
   echo "Name: ".$name;
});
Route::get('role',[
'middleware' => 'age:checkparameter',
'uses' => 'testcontroller@index',
]);
Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);
Route::resource('my','MyController');
class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');
Route::get('/myclass2','ImplicitController@index2');
Route::controller('test','ImplicitControlle');
Route::get('/foo/bar','UriController@index');
Route::get('/register',function(){
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');
Route::get('/basic_response', function () {
   return 'Hello World';
});
Route::get('/header',function(){
   return response("Hello", 200)->header('Content-Type', 'text/html')
      ->header('X-Header-One', 'Header Value')
   ->header('X-Header-Two', 'Header Value');
});
Route::get('json',function(){
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});
Route::get('/test', function(){
return view('test',array('name'=>'durgesh'));
});
Route::get('/test2', function(){
  return view('test2');
});
Route::get('blade', function () {
   return view('page',array('name' => 'Virat Gandhi'));
});
Route::get('rr','RedirectController@index');
Route::get('/redirectcontroller',function(){
   return redirect()->action('RedirectController@index');
});
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('view-records','StudViewController@index');
Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');
Route::get('delete/{id}','StudDeleteController@destroy');
Route::get('/form',function(){
   return view('form');
});
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');
Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');
Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');
Route::get('ajax',function(){
   return view('message');
});
Route::post('/getmsg','AjaxController@index');
Route::get('/error',function(){
   abort(404);
});
// Route::controller('testuser',[
// 'middleware' => 'role',
// 'uses' => 'usercontroller',
// ]);
Route::controller('testuser','usercontroller');