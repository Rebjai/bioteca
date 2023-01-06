<?php

use App\Http\Controllers\Api\ApiAssistantController;
use App\Http\Controllers\Api\ApiCollectorController;
use App\Http\Controllers\Api\ApiGenusController;
use App\Http\Controllers\Api\AssistantController;
use App\Http\Controllers\Api\familyAPIcontroller;
use App\Http\Controllers\Api\speciesAPIController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\orderAPIcontroller;
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

Route::middleware('auth:sanctum')->group(
    function () {

        Route::get(
            '/user',
            function (Request $request) {
                return $request->user();
            }
        );
    }
);
Route::middleware(['throttle:search', 'auth:sanctum'])->group(
    function () {
        Route::get('species/search', [speciesAPIController::class, 'search']);
        Route::get('locations/search', [LocationController::class, 'search']);
        Route::get('assistants/search', [ApiAssistantController::class, 'search']);
        Route::get('collectors/search', [ApiCollectorController::class, 'search']);
        // add route to api controller and specify method to use (index)
        Route::get('genus/search', [ApiGenusController::class, 'index']);
        Route::get('family/search', [familyAPIcontroller::class, 'index']);
        Route::get('order/search', [orderAPIcontroller::class, 'index']);
    }
);
