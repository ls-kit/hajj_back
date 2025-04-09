<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\V1\HajjStepController;
use App\Http\Controllers\Api\V1\DuaCollectionController;
use App\Http\Controllers\Api\V1\MapNavigationController;
use App\Http\Controllers\Api\V1\PreparationTipController;
use App\Http\Controllers\Api\V1\DailyPlannerController;
use App\Http\Controllers\Api\V1\HelpContactController;


use App\Http\Controllers\Api\V1\MenuItemController;
use App\Http\Controllers\Api\V1\MenuPageController;

Route::prefix('v1')->group(function () {
    Route::apiResource('menu-items', MenuItemController::class);
    Route::apiResource('menu-pages', MenuPageController::class);
});


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

Route::prefix('v1')->group(function () {
    Route::apiResource('hajj-steps', HajjStepController::class);
    Route::apiResource('dua-collections', DuaCollectionController::class);
    Route::apiResource('map-navigations', MapNavigationController::class);
    Route::apiResource('preparation-tips', PreparationTipController::class);
    Route::apiResource('daily-planners', DailyPlannerController::class);
    Route::apiResource('help-contacts', HelpContactController::class);
});
