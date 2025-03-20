<?php

use Illuminate\Support\Facades\Route;

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

Route::get('', function () {
    return view('admin_dashboard');
});

Route::prefix('insideheader')->group(function () {
    Route::get('/dashboard', function () {
        return view('insideheader.dashboard');
    });

    Route::get('/inventory', function () {
        return view('insideheader.inventory');
    });

    Route::get('/orders', function () {
        return view('insideheader.orders');
    });

    Route::get('/services', function () {
        return view('insideheader.services');
    });

    Route::get('/reports', function () {
        return view('insideheader.report');
    });
});