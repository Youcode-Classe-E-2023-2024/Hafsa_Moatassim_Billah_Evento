<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;




Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/dashboard_category', function () {
    return view('dashboard_category');
});
Route::get('/dashboard_user', function () {
    return view('dashboard_user');
});

Route::get('/addevent', function () {
    return view('organizer_event');
});

Route::get('/eventliste', function () {
    return view('eventliste');
});

Route::get('/content', function () {
    return view('content');
});



Route::post('logout', [LogoutController::class, 'destroy'])
    ->middleware('auth');
Route::get("register", [RegisterController::class, 'create'])->name('Form-register');

Route::post("register", [RegisterController::class, 'store'])->name('register');

Route::get("login", [LoginController::class, 'create'])->name('Form-login');

Route::post("login", [LoginController::class, 'authenticate'])->name('login');

Route::middleware('guest')->group(function () {
    Route::get('/request', [ForgotPasswordLinkController::class, 'create']);

    Route::post('/request', [ForgotPasswordLinkController::class, 'store']);

    Route::get('password/reset/{token}', [ForgotPasswordController::class, 'create'])->name('password.reset');

    Route::post('/reset', [ForgotPasswordController::class, 'reset'])->name('reset');
});

//category
Route::get('/dashboard_category', [CategoryController::class, 'showCategories']);

Route::post('/dashboard_category', [CategoryController::class, 'store']);

Route::delete('/deleteCategory/{id}', [CategoryController::class, 'destroyCategory']);
Route::delete('/destroy/{id}', [CategoryController::class, 'destroy']);

//events
Route::get('/createEvent', [EventController::class, 'showForm']);

Route::post('/createEvent', [EventController::class, 'store']);

Route::get('/allEvents', [EventController::class, 'AllEvents']);

Route::delete('/deleteEvent/{id}', [EventController::class, 'deleteEvent']);

Route::get('/updateEvent/{id}', [EventController::class, 'editEvent']);

Route::post('/updateEvent/{id}', [EventController::class, 'updateEvent']);
