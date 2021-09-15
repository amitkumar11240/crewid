<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\package;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripePaymentController;

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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/producerDashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('producerDashboard');
Route::any('/crew_login', [AuthController::class, 'login'])->name('/crew_login');
Route::any('/crewProfile', [ProfileController::class, 'index'])->name('/crewProfile');
Route::any('/crewEditProfile', [ProfileController::class, 'edit'])->name('/crewEditProfile');
Route::any('/crew_register', [AuthController::class, 'register'])->name('/crew_register');
Route::any('/register', [AuthController::class, 'view_register'])->name('/register');
Route::any('/package/{data}', [AuthController::class, 'package'])->name('package.data');
// Route::view('/contact','auth.contact')->name('/contact');
Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact');
Route::get('/package', [package::class, 'viewPackage'])->name('package');
Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::any('/crewInformations', [ProfileController::class, 'crewInformations'])->name('/crewInformations');
Route::post('/save', [ProfileController::class, 'save'])->name('/save');
Route::view('/crewdetails','crewUI.crewInformation')->name('/crewdetails');
Route::view('/preview','crewUI.preview')->name('/preview');
Route::view('/account','crewUI.account')->name('/account');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
