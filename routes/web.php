<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function(){
    return view('post');
});


// Route::view('post', '/post');


Route::get('/hello/subhello', function(){
    return view('firstpost');
});

