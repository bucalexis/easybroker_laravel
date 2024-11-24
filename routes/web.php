<?php

use App\Http\Controllers\Api\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/properties', [PropertyController::class, 'index' ]);