<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return ("Hello world");
});

Route::get('user/{u_id}',function($id){
    return($id);
});

Route::get('post/{post_id}/comment/{comment_id}',function($post_id,$comment_id){

    return "Post id: " . $post_id ."Comment id:" .$comment_id ; 
});

Route::get('student/{name?}',function($name=null){
    return "Hello".$name;
});

Route::redirect('about/','student/{name?}');

Route::fallback(function(){

    return "Page is not found";

});