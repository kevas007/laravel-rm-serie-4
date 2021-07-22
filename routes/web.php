<?php

use App\Http\Controllers\FruitsController;
use App\Http\Controllers\LegumesController;
use App\Models\Fruits;
use App\Models\Legumes;
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
Route::get('/',[FruitsController::class, 'index']);
Route::get('/fruit/{id}/show',[FruitsController::class, 'show']);

Route::get('/le',[LegumesController::class, 'index']);
Route::get('/legume/{id}/show',[LegumesController::class, 'show']);
