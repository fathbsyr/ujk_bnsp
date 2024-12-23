<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebdevController;
use App\Http\Controllers\JasaaiController;
use App\Http\Controllers\DashutamaController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);

Route::resource('/webdev', WebdevController::class);
Route::resource('/jasaai', JasaaiController::class);
Route::resource('/dashutama', DashutamaController::class);


