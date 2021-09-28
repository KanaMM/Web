<?php

use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\StatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

Route::prefix('projects')->group(function() {
    Route::get('/', [ProjectController::class, 'index']);
    Route::get('/{project}', [ProjectController::class, 'show']);
    Route::post('/store', [ProjectController::class, 'store']);
    Route::post('/update/{project}', [ProjectController::class, 'update']);
    Route::post('/delete/{project}', [ProjectController::class, 'delete']);
});

Route::prefix('offers')->group(function() {
    Route::get('/{project}', [OfferController::class, 'index']);
    Route::post('/offers/store', [OfferController::class, 'store']);
    Route::post('/offers/update/{offer}', [OfferController::class, 'update']);
});

Route::prefix('statuses')->group(function () {
    Route::get('/', [StatusController::class, 'index']);
});

