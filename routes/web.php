<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ItemController;
use App\http\Controllers\GenerateController;
use App\http\Controllers\PDFController;
use App\http\Controllers\ViewController;

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

Route::get('qrpdf', function () {
    return view('pdf.qrpdf');
});

Route::get('qrcode', function () {
    return view('individual.qrcode');
});

Route::get('welcomess', function () {
    return view('welcomess');
});

Auth::routes();

Route::get('welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('view', [App\Http\Controllers\ViewController::class, 'index'])->name('view');

Route::get('employees', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employees');
Route::post('/regis_employee', [App\Http\Controllers\EmployeeController::class, 'create'])->name('/regis_employee');

Route::post('regis_indiv', [App\Http\Controllers\IndividualController::class, 'create'])->name('regis_indiv');

Route::get('/generate', [App\Http\Controllers\GenerateController::class, 'index'])->name('generate');
Route::post('search', [App\Http\Controllers\GenerateController::class, 'search'])->name('search');
Route::get('delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');

Route::get('qrpdf/{{ $id }}', [App\Http\Controllers\PDFController::class, 'generate'])->name('qrpdf/{{ $id }}');

