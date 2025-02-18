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

Route::get('/state/standards', [App\Http\Controllers\ApiControllers\Standart\ApiStandartController::class, 'index']);

Route::post('/sections', [App\Http\Controllers\ApiControllers\Section\ApiSectionController::class, 'sections']);

Route::post('/sections/description', [App\Http\Controllers\ApiControllers\Section\ApiSectionController::class, 'sectionsDescription']);

Route::post('/sections/url', [App\Http\Controllers\ApiControllers\Section\ApiSectionController::class, 'sectionsUrl']);