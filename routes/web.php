<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\UserEngagementController;

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

Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});

Route::get('/', [AuthController::class, 'home'])->name('homePage');

// Route::get('/', function () {
//     return view('auth/signup');
// });

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('registerStore');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('anaytics', [AnalyticsController::class, 'index'])->name('anaytics');
Route::get('user-engagement', [UserEngagementController::class, 'userEngagementDataView'])->name('userEngagementDataView');
Route::get('seed-user-engagement', [UserEngagementController::class, 'seedUserEngagement'])->name('seedUserEngagement');


Route::post('store-user-data', [UserEngagementController::class, 'storeUserData'])->name('storeUserData');
Route::get('seed-user-engagement', [UserEngagementController::class, 'seedUserEngagement'])->name('seedUserEngagement');
