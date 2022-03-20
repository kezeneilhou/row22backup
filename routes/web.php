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
    return view('welcome');
});

Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'homeRedirector'])->middleware(['auth','verified'])->name('dashboard');
require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth','verified']],function()
{
    Route::resource('rowTower', App\Http\Controllers\RowTowerController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('profile', App\Http\Controllers\LicenseeProfileController::class);
    Route::resource('dcDash', App\Http\Controllers\DcController::class);
    Route::get('pending', [App\Http\Controllers\DataProviderController::class,'pending'])->name('pending');
    Route::get('approved', [App\Http\Controllers\DataProviderController::class,'approved'])->name('approved');
    Route::get('rejected', [App\Http\Controllers\DataProviderController::class,'rejected'])->name('rejected');
    Route::get('active', [App\Http\Controllers\DataProviderController::class,'active'])->name('active');
    Route::get('reverted', [App\Http\Controllers\DataProviderController::class,'reverted'])->name('reverted');

    // pdf & zip routes
    Route::get('appFormPdf/{id}', [App\Http\Controllers\PdfController::class,'appFormPdf'])->name('appFormPdf');
    Route::get('generatePermit/{towerID}', [App\Http\Controllers\PDFController::class,'generatePermit'])->name('generatePermit');
    Route::get('downloadAppZip/{id}', [App\Http\Controllers\PDFController::class,'downloadAppZip'])->name('downloadAppZip');
    Route::get('downloadUserZip/{id}', [App\Http\Controllers\PDFController::class,'downloadUserZip'])->name('downloadUserZip');
});
