<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TimeStampController;
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

Route::prefix('marcacao')->group(function () {
    Route::post('/cache-timestamp', [TimeStampController::class, 'cacheTimestamp'])->name('cache.timestamp');
});

Route::prefix('company')->group(function () {
    Route::post('/', [CompanyController::class, 'store'])->name('company.store');
});
