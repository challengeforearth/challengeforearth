<?php

use App\Http\Controllers\Auth\RegisteredUserController;
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


Route::get('/email/registered', function () {
    return view('emails.registered');
});

Route::get('/email/validate-email', function () {
    return view('emails.validate-email');
});

Route::get('email/validate/{token}', [RegisteredUserController::class, 'validateEmail'])
    ->middleware('guest');

require __DIR__.'/auth.php';
