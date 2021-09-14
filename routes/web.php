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
    return view('index');
});

Route::get('/About',function (){
    return view('about');
});

Route::get('/Contact',function (){
    return view('contact');
});

Route::get('/Projects',function (){
    return view('projects');
});

Route::get('/Services',function (){
    return view('services');
});

Route::get('/Portfolio',function (){
    return view('Portfolio');
});

Route::get('/Quote', function () {
    return view('contact');
});
