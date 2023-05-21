<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home1', [HomeController::class, 'index'])->name('home1');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\EmployerController;

Route::get('/employers', [EmployerController::class, 'index'])->name('employers.index');
Route::get('/employers/create', [EmployerController::class, 'create'])->name('employers.create');
Route::post('/employers', [EmployerController::class, 'store'])->name('employers.store');
Route::get('/employers/{employer}', [EmployerController::class, 'show'])->name('employers.show');
Route::get('/employers/{employer}/edit', [EmployerController::class, 'edit'])->name('employers.edit');
Route::put('/employers/{employer}', [EmployerController::class, 'update'])->name('employers.update');
Route::delete('/employers/{employer}', [EmployerController::class, 'destroy'])->name('employers.destroy');

//Route::resource('employers', EmployerController::class);
