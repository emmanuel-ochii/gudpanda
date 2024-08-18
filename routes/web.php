<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FrontendController;
use Inertia\Inertia;

// Route::get('/', function () {
//     return inertia('Index/Index');
// });

Route::get('/show', [IndexController::class,'show']);

Route::get('/', [FrontendController::class,'index']);
