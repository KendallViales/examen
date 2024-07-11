<?php

use App\Http\Controllers\ApuestasController;
use Illuminate\Support\Facades\Route;
Route::get('/apuestas',[ApuestasController::class,'index']);