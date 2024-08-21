<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);
Route::get('/primeiro-exercicio', [SiteController::class, 'exercicio1']);
Route::get('/segundo-exercicio', [SiteController::class, 'exercicio2']);


?>