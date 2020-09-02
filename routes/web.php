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

// Home
Route::get('/', 'PagesController@home');

// Kategori
Route::get('/kategori', 'PagesController@kategori');
Route::get('/kategori/cari', 'PagesController@kategoriCari');
Route::get('/kategori/{id}', 'PagesController@kategoriSort');
Route::get('/detail/{product}', 'PagesController@detail');

// FAQ
Route::get('/faq', 'PagesController@faqIndex');
Route::get('/faq/{faq}', 'PagesController@faqShow');

// Tentang
Route::get('/tentang', 'PagesController@tentang');

// Keluhan
Route::get('/keluhan', 'PagesController@tentang');
Route::post('/complaints', 'ComplaintsController@store');

// Login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/checkLogin', 'AuthController@checkLogin');
Route::get('/logout', 'AuthController@logout');


// Auth Admin
Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin', 'PagesController@admin');
    Route::resource('products','ProductsController');
    Route::resource('testimonies','TestimoniesController');
    Route::resource('faqs','FaqsController');

    Route::get('/complaints', 'ComplaintsController@index');
    Route::get('/complaints/{complaint}', 'ComplaintsController@show');
    Route::delete('/complaints/{complaint}','ComplaintsController@destroy');
});

// Route::get('/products', 'ProductsController@index');
// Route::get('/products/create', 'ProductsController@create');
// Route::get('/products/{product}', 'ProductsController@show');
// Route::post('/products', 'ProductsController@store');
// Route::delete('/products/{product}','ProductsController@destroy');
// Route::get('/products/{product}/edit','ProductsController@edit');
// Route::patch('/products/{product}','ProductsController@update');

// Route::get('/testimonies', 'TestimoniesController@index');
// Route::get('/testimonies/create', 'TestimoniesController@create');
// Route::get('/testimonies/{testimony}', 'TestimoniesController@show');
// Route::post('/testimonies', 'TestimoniesController@store');
// Route::delete('/testimonies/{testimony}','TestimoniesController@destroy');
// Route::get('/testimonies/{testimony}/edit','TestimoniesController@edit');
// Route::patch('/testimonies/{testimony}','TestimoniesController@update');

// Route::get('/faqs', 'FaqsController@index');
// Route::get('/faqs/create', 'FaqsController@create');
// Route::get('/faqs/{faq}', 'FaqsController@show');
// Route::post('/faqs', 'FaqsController@store');
// Route::delete('/faqs/{faq}','FaqsController@destroy');
// Route::get('/faqs/{faq}/edit','FaqsController@edit');
// Route::patch('/faqs/{faq}','FaqsController@update');

// Route::get('/complaints', 'ComplaintsController@index');
// Route::get('/complaints/create', 'ComplaintsController@create');
// Route::get('/complaints/{complaint}', 'ComplaintsController@show');
// Route::post('/complaints', 'ComplaintsController@store');
// Route::delete('/complaints/{complaint}','ComplaintsController@destroy');
// Route::get('/complaints/{complain}/edit','ComplaintsController@edit');
// Route::patch('/complaints/{complaint}','ComplaintsController@update');