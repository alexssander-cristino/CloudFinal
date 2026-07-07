<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\StatusController;

Route::get('/status', [StatusController::class, 'index']);

Route::apiResource('cameras', CameraController::class);