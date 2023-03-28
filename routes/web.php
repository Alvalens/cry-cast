<?php

use App\Http\Controllers\NewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Default route from laravel
Route::get('/', function () {
    return view('home');
});


// Register & Login
Route::get('/registerGet', [UserController::class, 'showRegistrationForm'])->name('registerGet');
Route::post('/registerPost', [UserController::class, 'register'])->name('registerPost');
Route::get('/loginGet', [UserController::class, 'showLoginForm'])->name('loginGet');
Route::post('/loginPost', [UserController::class, 'login'])->name('loginPost');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


// route to about page
Route::get('/about', function () {
    return view('about');
});
// route to login page
Route::get('/loginPage', function () {
    return view('login.login');
});

// route to register page
Route::get('/registerPage', function () {
    return view('login.register');
});

// menu route
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::prefix('menu')->group(function () {
    // route to eth
    Route::get('eth', function () {
        return view('menu.eth');
    });

    // route to bitcoin
    Route::get('bitcoin', function () {
        return view('menu.bitcoin');
    });

    // route to biance
    Route::get('binance', function () {
        return view('menu.binance');
    });

    // route to dogecoin
    Route::get('dogecoin', function () {
        return view('menu.dogecoin');
    });

    // route to iota
    Route::get('iota', function () {
        return view('menu.iota');
    });

    // route to solana
    Route::get('solana', function () {
        return view('menu.solana');
    });

    // route to stellar
    Route::get('stellar', function () {
        return view('menu.stellar');
    });

    // route to tron
    Route::get('tron', function () {
        return view('menu.tron');
    });
});

// Route to controller
Route::post('/import1', 'App\Http\Controllers\NewController@import1');
Route::post('/import2', 'App\Http\Controllers\NewController@import2');
Route::post('/import3', 'App\Http\Controllers\NewController@import3');
Route::post('/import4', 'App\Http\Controllers\NewController@import4');
Route::post('/import5', 'App\Http\Controllers\NewController@import5');
Route::post('/import6', 'App\Http\Controllers\NewController@import6');
Route::post('/import7', 'App\Http\Controllers\NewController@import7');
Route::post('/import8', 'App\Http\Controllers\NewController@import8');


// Output
Route::get('/output', 'App\Http\Controllers\NewController@getHighData')->name('output');

