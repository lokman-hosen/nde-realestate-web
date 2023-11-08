<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return Inertia::render('Home');
});
Route::get('/about', function () {
    return Inertia::render('About');
});
Route::get('/service', function () {
    return Inertia::render('Service');
});
Route::get('/project', function () {
    return Inertia::render('Project');
});
Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Auth::routes();
Route::match(['get', 'post'], 'register', function(){
    return redirect('/login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('user-profile', [UserController::class, 'profile'])->name('users.profile');
    Route::post('user-profile', [UserController::class, 'profileUpdate'])->name('users.profile.update');
    Route::post('user-password-change', [UserController::class, 'changePassword'])->name('users.change.password');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
