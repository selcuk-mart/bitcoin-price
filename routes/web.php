<?php

use App\Http\Controllers\BitcoinData;
use App\Http\Controllers\ChartController;
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

Route::get('/', fn() => view('chart', [
    'last_date' => ChartController::selectToday(),
    'first_date' => ChartController::selectOldDay(),
]));
Route::post('/fetch-bitcoin-price',[BitcoinData::class,'fetch']);
