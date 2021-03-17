<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentApplicationController;


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

Route::get('userApplication.application' ,[StudentApplicationController::class, 'index']
  )->middleware(['auth'])->name('application');

  Route::get('userApplication.application' ,[StudentApplicationController::class, 'create']
  )->middleware(['auth'])->name('application.create');
  
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





require __DIR__.'/auth.php';