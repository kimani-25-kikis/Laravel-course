<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

// Route::get('/product/{category?}', function(string $category =null){
//     return "Product category = $category";
// });

// Route::get('/product/{category?}', function(string $category = null){
//     return "Product category = $category";
// });

Route::get('/product/{id}', function(string $id){
    return "Works perfectly, $id";
})->WhereNumber('id');

Route::get('/sum/{num1}/{num2}', function(int $num1, int $num2){
    $sum = $num1 + $num2;
    return "The sum of $num1 and $num2 is: $sum";
})->whereNumber(['num1', 'num2']);

