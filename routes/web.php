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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::get('services', function () {
    return view('pages.services');
})->name('services');

Route::get('products', function () {
    return view('pages.products');
})->name('products');

Route::get('leo-enterprise', function () {
    return view('pages.leo');
})->name('leo');

Route::get('nitya-enterprise', function () {
    return view('pages.nitya');
})->name('nitya');

Route::get('contact-us', function () {
    return view('pages.contactus');
})->name('contactus');

Route::post('contact', 'App\Http\Controllers\ContactusController@contactPost')->name('contact-post');
