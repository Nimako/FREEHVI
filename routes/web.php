<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

//ADMIN
Route::get('/admin', [AuthController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin']);
Route::get('registration', [AuthController::class, 'registration']);
Route::post('post-registration', [AuthController::class, 'postRegistration']);
Route::post('update-registration', [AuthController::class, 'updateRegistration']);
Route::get('delete-registration/{id}', [AuthController::class, 'deleteRegistration']);
//Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout']);



Route::get('our-potency', function () {
    return view('our_potency');
});

Route::get('mission-vision', function () {
    return view('mission_vision');
});

Route::get('contact-us', function () {
    return view('contact_us');
});

Route::resource('products', ProductController::class);
Route::get('product/category/{slug}', [ProductController::class,'productByCategory']);
Route::post('product/add-to-cart', [ProductController::class, 'addToCart']);

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('checkout', function () {
    return view('product/checkout');
});


Route::get('business-packages', [PackageController::class, 'index']);