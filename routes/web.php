<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/helloss', function(){
    return view('post');
});


// Route::view('/post', 'post');


Route::get('/hello/subhello', function(){
    return view('firstpost');
});



Route::get('/hello/{id}', function(string $id) {
    if ($id) {
        return "<h1>Post Id: " . $id . " </h1>";
    } else {
        return '<h1>No Id Found</h1>';
    }
})->whereAlphaNumeric('id');


Route::get('/about-us', function(){
    return view('about');
})->name('mynamepage');


