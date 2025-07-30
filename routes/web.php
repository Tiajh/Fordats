<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/layanan', [LayananController::class, 'index']);