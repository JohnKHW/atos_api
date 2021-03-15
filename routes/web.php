<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\SupermarketController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FoodController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => '/admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        Route::resource('/supermarkets', SupermarketController::class)->except(['show']);
        Route::resource('/countries', CountryController::class);
        Route::resource('/food', FoodController::class);
    });

    Route::resource('/cashiers', CashierController::class);
    Route::get('/cashiers/cal/{uuid}', [CashierController::class, 'cal_mark'])->name('cal');
});
