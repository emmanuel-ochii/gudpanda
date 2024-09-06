<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use Inertia\Inertia;

// Route::get('/', function () {
//     return inertia('Index/Index');
// });



Route::prefix('/')->controller(FrontendController::class)->group(function () {
    Route::get('', 'index');
    Route::get('bid', 'bid');
    Route::get('contact', 'contact');
    Route::get('about', 'about');
    Route::get('shop', 'shop');
    Route::get('faq', 'faq');
    Route::get('become-a-giver', 'becomeAGiver');
    Route::get('what-we-do', 'whatWeDo');
    Route::get('join-our-team', 'JoinOurTeam');
});
