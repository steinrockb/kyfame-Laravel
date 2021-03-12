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
Route::view('/students', 'students'); 
Route::view('/sponsors', 'sponsors'); 
Route::view('/employers','employers');




Route::get('/', function () {
    return view('home');
});

Route::get('application', function(){
        return view('userApplication.application');
})->middleware(['auth'])->name('application');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/application', function(){
        return view('auth.application');
})->middleware(['auth'])->name('application');


require __DIR__.'/auth.php';