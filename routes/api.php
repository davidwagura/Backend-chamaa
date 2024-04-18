<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamaaController;
use App\Http\Controllers\PersonController;

//PersonController

Route::post('/createUser', [PersonController::class, 'createUser']);

Route::post('/addPhrase', [PersonController::class, 'addPhrase']);

Route::post('/addPassword', [PersonController::class, 'addPassword']);