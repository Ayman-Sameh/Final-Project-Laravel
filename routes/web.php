<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\TeamController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ClientController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\ServiceController;
use App\Http\Controllers\user\HomeUserController;
use App\Http\Controllers\front\PortfolioController;
use App\Http\Controllers\front\CategoriesController;
use App\Http\Controllers\user\ContactUserController;
use App\Http\Controllers\front\TestimonialsController;

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

Route::prefix('admin')->middleware('auth' , 'isAdmin')->group(function() {  

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/home', function () {
    return redirect()->route('home');
});
Route::get('home', [HomeController::class , 'index'])->name('home');
Route::resource('about' , AboutController::class);
Route::resource('clients' , ClientController::class);
Route::resource('services' , ServiceController::class);
Route::resource('testimonials' , TestimonialsController::class);
Route::resource('portfolio' , PortfolioController::class);
Route::resource('categories' , CategoriesController::class);
Route::resource('team' , TeamController::class);
Route::resource('contact' , ContactController::class);

});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return redirect()->route('home.index');
});
Route::get('home' , [HomeUserController::class , 'index'])->name('home.index');
Route::resource('contactuser' , ContactUserController::class);



require __DIR__.'/auth.php';


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
