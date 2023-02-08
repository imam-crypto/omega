<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MerkController;
use App\Http\Controllers\Admin\RepairController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/auth/google', [GoogleController::class, 'RedirectToGoogle'])->name('google.login');

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/login', function () {
    return view('auth.new-login');
});

Route::get('/newReg', function () {
    return view('auth.new-register');
});

Route::get('/create-car', function () {
    return view('admin.car.create');
});


Auth::routes();

Route::prefix('admin')->namespace('Admin')->group(
    function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/vehicles', [VehicleController::class, 'index'])->name('admin.vehicles');
        Route::get('/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create');
        Route::post('/vehicle/store', [VehicleController::class, 'store'])->name('vehicle.store');
        Route::get('/vehicle/edit/{id}', [VehicleController::class, 'edit'])->name('vehicle.edit');
        Route::put('/vehicle/update/{id}', [VehicleController::class, 'update'])->name('vehicle.update');
        Route::delete('/vehicle/destroy/{id}', [VehicleController::class, 'destroy'])->name('vehicle.destroy');
    }
);
Route::resource('merk', MerkController::class)->middleware('auth');
Route::resource('repair', RepairController::class);
Route::resource('car', CarController::class);
Route::prefix('admin')->namespace('Admin')->group(
    function () {
        // Route::resource('merk', VehicleController::class);
        // Route::get('/merks', [MerkController::class, 'index'])->name('admin.merks');
        // Route::get('/merk/create', [MerkController::class, 'create'])->name('merk.create');
        // Route::post('/merk/store', [MerkController::class, 'store'])->name('merk.store');
    }
);
Route::prefix('user')->namespace('User')->group(
    function () {
        Route::get('/', [UserDashboardController::class, 'index'])->name('user.dashboard');
    }
);


Route::get('/new-login', [LoginController::class, 'newLogin'])->name('new.login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [IndexController::class, 'index'])->name('new.index');
Route::get('/new-dashboard', [DashboardController::class, 'index'])->name('new.dashboard');
// Route::get('/car', [IndexController::class, 'car'])->name('car');
