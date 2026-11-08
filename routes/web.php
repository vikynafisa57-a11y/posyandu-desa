<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentikasiController;

Route::get('/', [AutentikasiController::class, 'halamanLogin']);
Route::get('/login', [AutentikasiController::class, 'halamanLogin'])
    ->name('login');

Route::post('/login', [AutentikasiController::class, 'prosesLogin']);