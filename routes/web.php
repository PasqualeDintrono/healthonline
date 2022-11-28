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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view ('about');
})->name('about');

Route::get('/contact', function () {
    return view ('contact');
})->name('contact');

Route::get('/pricing', function () {
    return view ('pricing');
})->name('pricing');


/* SEND EMAIL ROUTE */

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contactPost'])->name('contactPost');


Route::post('buy-licence',[App\Http\Controllers\PaypalController::class, 'createTransaction'])->name('buy-licence');
Route::post('process-transaction', [App\Http\Controllers\PaypalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [App\Http\Controllers\PaypalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [App\Http\Controllers\PaypalController::class, 'cancelTransaction'])->name('cancelTransaction');
Route::get('/payment-status', function () {
    return view('payment-status');
})->name('paymentStatus');

