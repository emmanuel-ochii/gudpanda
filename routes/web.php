<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
// use Illuminate\Foundation\Application;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return inertia::render('Guest/Home');
// })->name('guest.home');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/seller/')->controller(SellerController::class)->group(function () {
    Route::get('dashboard', 'index')->name('seller.home');

});

Route::prefix('/admin')->controller(AdminController::class)->group(function () {
    Route::get('dashboard', 'index')->name('admin.home');
    Route::get('all-items', 'allItems')->name('admin.allItems');
    Route::get('used-items', 'usedItems')->name('admin.usedItems');
});

// Frontend
Route::prefix('/')->controller(GuestController::class)->group(function () {
    Route::get('', 'index')->name('guest.home');
    Route::get('bid', 'bid');
    Route::get('contact', 'contact');
    Route::get('about', 'about');
    Route::get('shop', 'shop');
    Route::get('faq', 'faq');
    Route::get('become-a-giver', 'becomeAGiver');
    Route::get('what-we-do', 'whatWeDo');
    Route::get('join-our-team', 'JoinOurTeam');
});

require __DIR__ . '/auth.php';
