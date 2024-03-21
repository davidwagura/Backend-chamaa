<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamaaController;
use App\Http\Controllers\PersonController;

// Route::group(['middleware' => ['web']], function () {
    // Route::post('/add-username', [ChamaaController::class, 'addUsername']);
    // Route::post('/select-phrase', [ChamaaController::class, 'selectPhrase']);
    // Route::post('/add-password', [ChamaaController::class, 'addPassword']);
// });


//PersonController

Route::post('/createUser', [PersonController::class, 'createUser']);

Route::post('/addPhrase', [PersonController::class, 'addPhrase']);

Route::post('/addPassword', [PersonController::class, 'addPassword']);