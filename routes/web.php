<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index']);

Route::get('/cliente', [SiteController::class, 'cliente']);

Route::post('/cliente', [SiteController::class, 'store']);

Route::get('/remover/{id}', [SiteController::class, 'delete']);

Route::get('/sobre', [SiteController::class, 'sobre']);