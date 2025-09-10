<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

route::get('/', [projectController::class, 'index']);