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

// Frontend

Route::get('/', 'HomeController@index')
->name('beranda');

Route::get('/profile-ppdi', 'ProfileController@index')
->name('profile');

Route::get('/sejarah-ppdi', 'SejarahController@index')
->name('sejarah');

Route::get('/pengurus', 'PengurusController@index')
->name('pengurus');

Route::get('/foto', 'FotoController@index')
->name('foto');

Route::get('/video', 'VideoController@index')
->name('video');

Route::get('/blog', 'BlogController@index')
->name('blog');

Route::get('/contact', 'ContactController@index')
->name('contact');

// Backend
Route::prefix('admin')
        ->namespace('admin')
        ->group(function(){
            Route::get('/', 'DashboardController@index')
                ->name('dashboard');
            Route::get('/datafoto', 'FotoController@index')
                ->name('datafoto');
            Route::get('/datavideo', 'VideoController@index')
                ->name('datavideo');
            Route::get('/databerita', 'BeritaController@index')
                ->name('databerita');
            Route::get('/datapesan', 'PesanController@index')
                ->name('datapesan');
        });

