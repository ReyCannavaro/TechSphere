<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PraloginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GadgetsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserGadgetController;
use App\Http\Controllers\UserController;


// Homepage //
Route::get('/', [HomeController::class, 'index'])->name('homepage');

// Halaman Pralogin //
Route::get('/pralogin', [PraloginController::class, 'pralogin'])->name('pralogin');

// Halaman Login & Register //
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Redirect Default Setelah Login
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.gadgets.dashboard');
    } else {
        return redirect()->route('user.homepage');
    }
})->middleware('auth')->name('dashboard');

// Logout //
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// ================= USER ROUTES ================= //
Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    Route::get('/homepage', [DashboardController::class, 'index'])->name('homepage');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/gadgets', [UserGadgetController::class, 'index'])->name('gadgets');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
});

// ================= ADMIN ROUTES ================= //
use App\Http\Controllers\Admin\RatingController as AdminRatingController;

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('gadgets.dashboard');

    Route::get('/gadgets', [AdminController::class, 'gadgets'])->name('gadgets');
    Route::get('/gadgets/create', [GadgetsController::class, 'create'])->name('gadgets.create');
    Route::post('/gadgets/store', [GadgetsController::class, 'store'])->name('gadgets.store');
    Route::get('/gadgets/{id}/edit', [GadgetsController::class, 'edit'])->name('gadgets.edit');
    Route::put('/gadgets/{id}', [GadgetsController::class, 'update'])->name('gadgets.update');
    Route::delete('/gadgets/{id}', [GadgetsController::class, 'destroy'])->name('gadgets.destroy');

    Route::resource('categories', CategoriesController::class);

    // ✅ Route halaman rating menggunakan controller yang benar
    Route::get('/ratings', [AdminRatingController::class, 'index'])->name('ratings.index');
});
// ================= END ADMIN ROUTES ================= //