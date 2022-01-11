<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\GamificationController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RgpdController;
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

Route::prefix('/dashboard')->middleware(['auth'])->group(function() {
    Route::get('/', [GamificationController::class, 'index'])->name("dashboard.home");
    Route::post('/rgpd/download', [RgpdController::class, 'rgpddownload'])->name("dashboard.rgpddownload");
    Route::get('/profile', [GamificationController::class, 'profile'])->name("dashboard.profile");
    Route::get('/admin', [DashboardController::class, 'admin'])->name("dashboard.admin");
    Route::get('/challenge/create', [DashboardController::class, 'createChallenge'])->name("dashboard.createchallenge");
    Route::get('/challenge/manage', [DashboardController::class, 'manageChallenge'])->name("dashboard.managechallenge");
    Route::get('/nosgestesclimats', [GamificationController::class, 'nosgestesclimats'])->name("dashboard.nosgestesclimats");
});


Route::prefix('challenge')->middleware(['auth'])->group(function() {
    Route::get('/', [ChallengeController::class, 'index'])->name("challenge.all");
    Route::get('/show/{id}', [ChallengeController::class, 'show'])->name("challenge.show");
    Route::get('/{category}', [ChallengeController::class, 'filterChallenges'])->name("challenge.category");
});

Route::prefix('journey')->middleware(['auth'])->group(function () {
    Route::get('/launch/{id}', [JourneyController::class, 'launchjourney'])->name("journey.launch");
    Route::get('/show/{id}', [JourneyController::class, 'show'])->name("journey.show");
    Route::get('/{level}', [JourneyController::class, 'filterDifficulty'])->name("journey.level");
    Route::get('/', [JourneyController::class, 'index'])->name("journey.all");
});

Route::prefix('api')->middleware(['auth'])->group(function () {
    Route::get('/challenge/update/{id}', [ChallengeController::class, 'update']);
});

Route::prefix('api')->middleware([])->group(function () {
    Route::post('/dashboard/feedback', [DashboardController::class, 'create']);
});
