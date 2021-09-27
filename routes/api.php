<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
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

//Показ проекта
    Route::get('projects', [ProjectController::class, 'index']);
    Route::get('/projects/{project}', [ProjectController::class, 'show']);

//Создание проекта
    Route::post('/store', [ProjectController::class, 'store']);

//Обновление проекта
    Route::post('/update/{project}', [ProjectController::class, 'update']);

//Удаление проекта
    Route::post('/delete/{project}', [ProjectController::class, 'delete']);
