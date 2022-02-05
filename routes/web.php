<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminHomeComponent;


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

Route::get('locale/{locale}', [MainController::class, 'changeLocale'])->name('locale');
Route::middleware(['set_locale'])->group(function () {
    Route::get('/', HomeComponent::class)->name('home');

    // Auth
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    });
});

//ADMIN
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/', AdminHomeComponent::class)->name('admin.home');
});
