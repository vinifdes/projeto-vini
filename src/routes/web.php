<?php

use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series',
[SerieController::class, 'index']);

Route::get('/series/criar',
[SerieController::class, 'create']);

Route::post('/series/salvar',
[SerieController::class, 'store']);
