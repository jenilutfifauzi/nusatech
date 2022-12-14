<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DetailUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', [AuthController::class, 'register'] )->name('register');

Route::get('/detail_user', [DetailUserController::class, 'index'] )->name('detail_user');
Route::get('/detail_user/{id}', [DetailUserController::class, 'show'] )->name('detail_user.show');
Route::get('/detail_user/{id}/update', [DetailUserController::class, 'update'] )->name('detail_user.update');
Route::get('/detail_user/{id}/destroy', [DetailUserController::class, 'destroy'] )->name('detail_user.destroy');
