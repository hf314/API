<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/exchange-rates', [Controllers\Api\ExchangeRatesController::class, 'ExchangeRateOfDay'])->middleware('read-only');
Route::get('/exchange-rates/currency', [Controllers\Api\ExchangeRatesController::class, 'SingleCurrencyRateOnDate'])->middleware('read-only');
Route::post('/exchange-rates', [Controllers\Api\ExchangeRatesController::class, 'AddRate'])->middleware('read-write');
Route::post('/generate-key', [Controllers\Api\GenerateKeyController::class, 'NewKey']);
