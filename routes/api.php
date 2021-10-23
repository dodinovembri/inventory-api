<?php

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

Route::get('/item', [App\Http\Controllers\ItemController::class, 'index'])->name('index');
Route::post('/item/store', [App\Http\Controllers\ItemController::class, 'store'])->name('store');
Route::put('/item/update/{id}', [App\Http\Controllers\ItemController::class, 'update'])->name('update');
Route::delete('/item/destroy/{id}', [App\Http\Controllers\ItemController::class, 'destroy'])->name('destroy');