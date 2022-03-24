<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiteConfigController;
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

Route::prefix('news')->controller(NewsController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{post}', 'show');
    Route::post('/create', 'store');
    Route::post('/edit/{post}', 'update');
    Route::delete('/delete/{post}', 'destroy');
});

Route::prefix('events')->controller(EventController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{post}', 'show');
    Route::post('/create', 'store');
    Route::post('/edit/{post}', 'update');
    Route::delete('/delete/{post}', 'destroy');
});

Route::prefix('projects')->controller(ProjectController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{post}', 'show');
    Route::post('/create', 'store');
    Route::post('/edit/{post}', 'update');
    Route::delete('/delete/{post}', 'destroy');
});

Route::prefix('site')->controller(SiteConfigController::class)->group(function () {
    Route::get('/info', 'show');
    Route::post('/config', 'update');
});