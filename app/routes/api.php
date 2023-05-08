<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/exchange-rates', [Controllers\Api\ExchangeRatesController::class, 'ExchangeRateOfDay']);
Route::get('/exchange-rates/currency', [Controllers\Api\ExchangeRatesController::class, 'SingleCurrencyRateOnDate']);
Route::post('/exchange-rates', [Controllers\Api\ExchangeRatesController::class, 'AddRate'])->middleware('CheckApiKey');
Route::post('/generate-key', [Controllers\Api\GenerateKeyController::class, 'NewKey']);
