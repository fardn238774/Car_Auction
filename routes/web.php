<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#For login 1 

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return 'Welcome to Car Auction Dashboard!';
})->middleware('auth');


#for login2
Route::get('/login2', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login2', [AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return 'Welcome to Car Auction Dashboard!';
})->middleware('auth');

#for register pannel

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);



Route::get('/dashboard', function () {
    return view('dashboard');
});




Route::middleware(['auth'])->group(function () {
Route::get('/organization', [AuthController::class, 'organizationCars'])->name('organization');
});





Route::get('/licensed_organization', [AuthController::class, 'showOrganizations']);