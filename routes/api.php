<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MenuController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hajjStep',function(){
    return '\App\models\HajjStep'::all();
});

Route::prefix('menus')->group(function () {
    Route::get('/', [MenuController::class, 'index']);
    Route::get('/{slug}', [MenuController::class, 'show']);
});
