<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/exchange-rates', [Controllers\Api\ExchangeRatesController::class, 'ExchangeRateOfDay']);
Route::get('/exchange-rates/currency', [Controllers\Api\ExchangeRatesController::class, 'SingleCurrencyRateOnDate']);
Route::post('/add-rate', [Controllers\Api\ExchangeRatesController::class, 'AddRate'])->middleware('CheckApiKey');
