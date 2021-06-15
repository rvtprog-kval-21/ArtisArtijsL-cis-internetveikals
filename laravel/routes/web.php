<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/email', function () {
    return view('email');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/email',[ContactController::class,'contact']);

Route::resource('products', \App\Http\Controllers\ProductController::class);

Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

Route::get('account', [RegisterController::class,'index']);

Route::post('index', [RegisterController::class,'store'])->name('store');

Route::post('account', [RegisterController::class,'index'])->name('account'); // name index

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
