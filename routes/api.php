<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SupermarketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\UserController;

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
Route::post('/user/register', [UserController::class, 'test']);

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('/articles', ArticleController::class);
    Route::apiResource('/comments', CommentController::class);
    Route::get('/user/all', [UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/cashiers/cal/{uuid}', [CashierController::class, 'cal_mark'])->name('cal');

    Route::group(['prefix' => '/rank'], function () {
        Route::group(['prefix' => '/users'], function () {
            Route::get('/all', [RankController::class, 'usersAll']);
            Route::get('/country', [RankController::class, 'usersCountry']);
        });
        Route::get('/countries/all', [RankController::class, 'countriesAll']);
    });
});
Route::apiResource('supermarkets', SupermarketController::class)->only('show');
