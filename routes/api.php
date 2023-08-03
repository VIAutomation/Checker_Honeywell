<?php

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttributesController;
use App\Http\Controllers\ModelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/show/model/{id}', [ModelController::class, 'show']);

Route::get('/cell_types', [AttributesController::class, 'cell_types']);
Route::get('/circuit_types', [AttributesController::class, 'circuit_types']);
Route::get('/cover_styles', [AttributesController::class, 'cover_styles']);
Route::get('/force_units', [AttributesController::class, 'force_units']);
Route::get('/ot_types', [AttributesController::class, 'ot_types']);
Route::get('/units', [AttributesController::class, 'units']);
