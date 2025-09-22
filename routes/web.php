<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProdukController; // <-- Impor Controller


// route::get('/', [projectController::class, 'index']);
// route::get('/product', [ProductController::class, 'index']);

Route::get('/produks', [ProdukController::class, 'index']);