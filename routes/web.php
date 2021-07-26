<?php

use App\Http\Controllers\ApartmentsController;
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
    return view('welcome');
});
Route::resource('/apartment',ApartmentsController::class,);
Route::get('/apartment/create',[ApartmentsController::class, 'create'])->name('create');
Route::post('/apartment/create',[ApartmentsController::class, 'store'])->name('store');
Route::get('/apartment/list',[ApartmentsController::class, 'index'])->name('index');
Route::get('/apartment/edit/{id}',[ApartmentsController::class, 'update'])->name('update');
Route::post('/apartment/edit/{id}',[ApartmentsController::class, 'save'])->name('save');
Route::delete('/apartment/delete/{id}',[ApartmentsController::class, 'delete'])->name('delete');
