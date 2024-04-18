<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

//PersonController


Route::post('/addPhrase', [PersonController::class, 'addPhrase']);

Route::post('/addPassword', [PersonController::class, 'addPassword']);

Route::post('/username', [PersonController::class, 'username']);

Route::post('/paymail', [PersonController::class, 'paymail']);