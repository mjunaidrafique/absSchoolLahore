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
Route::get('/', 'Frontend\HomeController@getHome')->name('home');
Route::prefix('abs')->group(function (){
    Route::get('/about-us', 'Frontend\HomeController@getAboutUs')->name('about-us');
    Route::get('/contact-us', 'Frontend\HomeController@getContactUs')->name('contact-us');
    Route::get('/teachers', 'Frontend\HomeController@getTeachers')->name('teachers');
    Route::get('/cources', 'Frontend\HomeController@getCources')->name('cources');
    Route::get('/events', 'Frontend\HomeController@getEvents')->name('events');
});