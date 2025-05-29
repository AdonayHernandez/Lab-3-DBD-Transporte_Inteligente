<?php

use App\Http\Controllers\BrandApiController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StopController;
use App\Http\Controllers\TransportCardController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TypeOfVehicleController;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\VehicleController;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('users',UserApiController::class);
Route::apiResource('typeOfVehicule',TypeOfVehicleController::class);
Route::apiResource('stops',StopController::class);
Route::apiResource('transportcards',TransportCardController::class);
Route::apiResource('routes',RouteController::class);
Route::apiResource('drivers',DriverController::class);
Route::apiResource('trips',TripController::class);
Route::apiResource('vehicles',VehicleController::class);
Route::apiResource('maintenances',MaintenanceController::class);
