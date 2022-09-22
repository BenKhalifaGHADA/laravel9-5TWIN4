<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/test',[TestController::class,'index']);
Route::get('/show1',function (){
    return view('Home.show',['name'=>"c'est un paramètre envoyé via la route"]);
    // return view ('Home.show')->with('name',"c'est un paramètre envoyé via la route");
    //return view('Home.show',compact('name',"c'est un paramètre envoyé via la route");
});

Route::get('/show',[TestController::class,'index']);
Route::get('/home', function(){
   return view('Home');
});
Route::get('/add', function(){
    return view('AddUser');
})->name('addUser');

Route::get('/update', function(){
    return view('UpdateUser');
});

Route::get('/register', function (){
    return view('form');
});


