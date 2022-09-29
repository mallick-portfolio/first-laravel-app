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
})->name("/");

Route::get('/about', function () {
    return view("about");
})->name("about.us");
Route::get(md5("/contact"), function(){
    return view("contact");
})->name("contact.us");
Route::get('country', function () {
    return("hello world");
})->middleware("country")->name("country");