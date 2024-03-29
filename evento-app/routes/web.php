<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;



Route::middleware('role:admin', 'auth')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard_user', [DashboardController::class, 'show']);
    Route::get('/dashboard_category', [CategoryController::class, 'showCategories']);
});

Route::middleware('role:organizer')->group(function() {
    Route::get('/allEvents', [EventController::class, 'AllEvents'])->middleware('auth');
    Route::get('/organizer_event', [DashboardController::class, 'show']);

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard_category', function () {
    return view('dashboard_category');
});

Route::get('/eventliste', function () {
    return view('eventliste');
});

Route::get('/content', function () {
    return view('content');
});
Route::get('/login', function () {
    return view('Auth.login');
});



Route::post('logout', [LogoutController::class, 'destroy'])
    ->middleware('auth');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//Route::get("login", [LoginController::class, 'create'])->name('Form-login');

Route::post("login", [LoginController::class, 'store'])->name('login');

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
Route::get('/organizer_event', [EventController::class, 'showForm'])->middleware('auth');
Route::post('/event-store', [EventController::class,'store'])->name('event.store');



Route::delete('/deleteEvent/{id}', [EventController::class, 'deleteEvent']);

Route::get('/updateEvent/{id}', [EventController::class, 'editEvent']);

Route::post('/updateEvent', [EventController::class, 'updateEvent'])->name('updateEvent');

//Route::get('/addevent', [EventController::class, 'ShowAddEvent'])->middleware('auth');
Route::get('/addevent', [EventController::class, 'AllEvents'])->middleware('auth');


Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout');

Route::delete('/delete/{id}', [UserController::class, 'destroy']);
Route::put('/update/{id}', [UserController::class, 'update']);

Route::get('/delete/{id}', [EventController::class, 'deleteEvent']);


Route::get('/eventliste', [EventController::class, 'AllEventshome']);
Route::get('/content', [EventController::class, 'ShowEventDescription']);







