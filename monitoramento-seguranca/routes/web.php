<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;

Route::get('/status', [StatusController::class, 'index']);

Route::get('/', function () {

    $cameras = json_decode(file_get_contents(storage_path('app/data/cameras.json')), true);
    $sensores = json_decode(file_get_contents(storage_path('app/data/sensores.json')), true);
    $fabricantes = json_decode(file_get_contents(storage_path('app/data/fabricantes.json')), true);
    $locais = json_decode(file_get_contents(storage_path('app/data/locais.json')), true);

    return view('index', [
        'cameras' => count($cameras),
        'sensores' => count($sensores),
        'fabricantes' => count($fabricantes),
        'locais' => count($locais),
    ]);

});