<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use Inertia\Inertia;

// Route::get('/', function () {
//     return inertia('Index/Index');
// });


Route::get('/', [FrontendController::class,'index']);
Route::get('/bid', [FrontendController::class,'bid']);
Route::get('/contact', [FrontendController::class,'contact']);
Route::get('/about', [FrontendController::class,'about']);
Route::get('/shop', [FrontendController::class,'shop']);
Route::get('/faq', [FrontendController::class,'faq']);
Route::get('/become-a-giver', [FrontendController::class,'becomeAGiver']);
