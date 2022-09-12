<?php

use App\Http\Controllers\FormController;
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


Route::get('/', [FormController::class, 'index'])->name('back');
Route::get('/form/create', [FormController::class, 'create'])->name('form');
Route::get('/list', [FormController::class, 'list'])->name('list');
Route::get('/show/{id}', [FormController::class, 'show'])->name('show');
Route::get('/edit/{id}', [FormController::class, 'edit'])->name('edit');
Route::post('/store', [FormController::class, 'store'])->name('store');
Route::PUT('/update/{id}', [FormController::class, 'update'])->name('update');
Route::get('/delete/{id}', [FormController::class, 'destroy'])->name('delete');
