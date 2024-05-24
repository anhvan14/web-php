<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     dd(1);
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('index');

Route::get('/create',[HomeController::class,'create'])->name('create');
Route::post('/store',[HomeController::class,'store'])->name('store');


Route::get('/login',[HomeController::class,'login'])->name('login');

Route::get('/student',[HomeController::class,'student'])->name('student.list'); //index
Route::get('/student/create',[HomeController::class,'studentCreate'])->name('student.create');

Route::post('/student/store',[HomeController::class,'studentStore'])->name('student.store');



