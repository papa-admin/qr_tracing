<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ItemController;
use App\http\Controllers\GenerateController;

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

Route::get('/front', function () {
    return view('front');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('employer', function () {
    return view('employer.employer');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/items', [App\Http\Controllers\ItemController::class, 'index'])->name('items');
Route::post('/regis_item', [App\Http\Controllers\ItemController::class, 'create'])->name('/regis_item');
Route::get('/generate', [App\Http\Controllers\GenerateController::class, 'index'])->name('generate');
Route::post('search', [App\Http\Controllers\GenerateController::class, 'search'])->name('search');
Route::get('delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');


