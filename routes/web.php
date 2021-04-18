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

Route::get('/', 'main\LoginController@index')->name('main.login');

Route::get('/logout', 'main\LoginController@logout')->name('main.logout');

Route::get('/dashboard', 'main\DashboardController@index')->name('main.dashboard');

Route::post('/auth', 'main\LoginController@auth');


