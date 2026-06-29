<?php

use Illuminate\Support\Facades\Route;
use App\Models\Camera;
use App\Models\Sensor;
use App\Models\Manufacturer;
use App\Models\Location;

Route::get('/', function () {

    return view('index',[
        'cameras'=>Camera::count(),
        'sensores'=>Sensor::count(),
        'fabricantes'=>Manufacturer::count(),
        'locais'=>Location::count()
    ]);

});