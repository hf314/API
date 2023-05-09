<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/exchange-rates', [Controllers\Api\ExchangeRatesController::class, 'ExchangeRateOfDay'])->middleware('observer');
Route::get('/exchange-rates/currency', [Controllers\Api\ExchangeRatesController::class, 'SingleCurrencyRateOnDate'])->middleware('observer');
Route::post('/exchange-rates', [Controllers\Api\ExchangeRatesController::class, 'AddRate'])->middleware('editor');
Route::post('/generate-key', [Controllers\Api\GenerateKeyController::class, 'NewKey']);
