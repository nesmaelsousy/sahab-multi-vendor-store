<?php

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

Route::get('/accord', 'App\Http\Controllers\WebsiteController@accord_page')->name('accord_page');
Route::get('/prodect/{id}', 'App\Http\Controllers\WebsiteController@products_page')->name('products_page');
Route::get('/search', 'App\Http\Controllers\WebsiteController@search_page')->name('search_page');

