<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'welcome']);
Route::get('/kontakt', [PageController::class,'kontakt']);
Route::get('/pinguine', [PageController::class,'pinguine']);
Route::get('/impressum', [PageController::class,'impressum']);
Route::get('/kurse', [PageController::class,'kurse']);
Route::get('/interessen', [PageController::class,'interessen']);
Route::get('/anmeldung', [PageController::class,'anmeldung']);
Route::get('/danke', [PageController::class,'danke']);
Route::get('/anmeldungen', [PageController::class,'anmeldungen']);
Route::post('/anmeldung', [PageController::class,'anmeldungAuswerten']);
