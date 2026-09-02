<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\KurseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'welcome']);
Route::get('/kontakt', [PageController::class,'kontakt']);
Route::get('/pinguine', [PageController::class,'pinguine']);
Route::get('/impressum', [PageController::class,'impressum']);
Route::get('/interessen', [PageController::class,'interessen']);
Route::get('/anmeldung', [PageController::class,'anmeldung']);
Route::get('/danke', [PageController::class,'danke']);
Route::get('/anmeldungen', [PageController::class,'anmeldungen']);

Route::post('/anmeldung', [PageController::class,'anmeldungAuswerten']);


Route::get('/kurse', [KurseController::class,'index']);

Route::get('kurse/create',[KurseController::class,'create']);
Route::post('kurse',[KurseController::class,'store']);

Route::get('/kurse/{kurse}/edit', [KurseController::class,'edit']);
Route::get('/kurse/{kurse}', [KurseController::class,'update']);

Route::get('/kurse/{kurse}', [KurseController::class,'show']);

