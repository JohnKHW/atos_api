<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SupermarketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCouponController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});


Route::post('/user/login', [UserController::class, 'login']);
Route::post('/user/register', [UserController::class, 'store']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', [UserController::class, 'whomi']);
    Route::get('/logout', [UserController::class, 'logout']);

    Route::apiResource('/articles', ArticleController::class)->except('index');
    Route::get('/articles', [ArticleController::class, 'apiIndex']);
    Route::apiResource('/comments', CommentController::class);

    Route::get('/cashiers/cal/{uuid}', [CashierController::class, 'cal_mark'])->name('cal');

    Route::group(['prefix' => '/scan'], function () {
        Route::get('/qrcode/{uuid}', [ScanController::class, 'qrcode']);
        Route::post('/recognize', [ScanController::class, 'recognize']);
    });

    Route::group(['prefix' => '/coupons'], function () {
        Route::get('/', [CouponController::class, 'apiIndex']);
        Route::get('/all', [UserCouponController::class, 'index']);
        Route::get('/redeem/{coupon}', [UserCouponController::class, 'redeem']);
        Route::get('/use/{userCoupon}', [UserCouponController::class, 'use']);
    });

    Route::group(['prefix' => '/rank'], function () {
        Route::group(['prefix' => '/users'], function () {
            Route::get('/all', [RankController::class, 'usersAll']);
            Route::get('/country', [RankController::class, 'usersCountry']);
        });
        Route::get('/countries/all', [RankController::class, 'countriesAll']);
    });
});
Route::apiResource('supermarkets', SupermarketController::class)->only('show');
