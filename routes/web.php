<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hello', [HelloController::class, 'welcome']);






















// use App\Http\Controllers\CarController;
// use App\Http\Controllers\CalculatorController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function(){
//     return view('about');
// });

// // Route::get('/product/{category?}', function(string $category =null){
// //     return "Product category = $category";
// // });

// // Route::get('/product/{category?}', function(string $category = null){
// //     return "Product category = $category";
// // });

// Route::get('/product/{id}', function(string $id){
//     return "Works perfectly, $id";
// })->WhereNumber('id');

// Route::get('/sum/{num1}/{num2}', function(int $num1, int $num2){
//     $sum = $num1 + $num2;
//     return "The sum of $num1 and $num2 is: $sum";
// })->whereNumber(['num1', 'num2']);

// Route::get('/add/{num1}/{num2?}', function (float $num1, float $num2 = 0) {
//     $sum = $num1 + $num2;
//     return "The sum of $num1 and $num2 is: $sum";
// })->where(['num1' => '[0-9]+(\.[0-9]+)?', 'num2' => '[0-9]+(\.[0-9]+)?']);

// // Route::get('/car', [CarController::class, 'index']);
// use App\Http\Controllers\ProductController;

// Route::get('/product/{category?}', [ProductController::class, 'show']);

// Route::get('/sum/{num1}/{num2}', [CalculatorController::class, 'sum']);
// Route::get('/subtract/{num1}/{num2}', [CalculatorController::class, 'subtract']);

