<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-key', [Controllers\GenerateKeyController::class, 'newKey']);
Route::post('/result', [Controllers\GenerateKeyController::class, 'sum'])->name('result');

