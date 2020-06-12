<?php

use Illuminate\Support\Facades\Route;


// Auth Controllers
Route::get('/register', 'AuthController@registerView')->name('register');
Route::post('/register', 'AuthController@registration')->name('register');

Route::get('/login', 'AuthController@loginView')->name('login');
Route::post('/login', 'AuthController@login')->name('login');
Route::post('/logout', 'AuthController@logout')->name('logout');



Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth', 'Admin']);
Route::resource('/country', 'Admin\CountryController')->middleware(['auth', 'Admin']);


// University Routes
Route::get('/university', 'Admin\UniversityController@create')->name('university.create')->middleware(['auth', 'Admin']);
Route::post('/university', 'Admin\UniversityController@store')->name('university.store')->middleware(['auth', 'Admin']);
Route::get('/university/{id}/{country}', 'Admin\UniversityController@UniversityList')->name('university.list')->middleware(['auth', 'Admin']);
Route::get('/university/{id}', 'Admin\UniversityController@editUniversity')->name('university.edit')->middleware(['auth', 'Admin']);
Route::put('/university/{id}/update', 'Admin\UniversityController@updateUniversity')->name('university.update')->middleware(['auth', 'Admin']);
Route::delete('/university/{id}/delete', 'Admin\UniversityController@destroyUniversity')->name('university.destroy')->middleware(['auth', 'Admin']);



Route::get('/', 'WebsiteController@index')->name('website.home');
Route::get('/university-list', 'WebsiteController@university')->name('website.university.list');
Route::get('/guildeline', 'WebsiteController@guildeline')->name('website.guildeline');
Route::get('/contact', 'WebsiteController@contact')->name('website.contact');

// Account
Route::get('/account', 'AccountController@account')->name('account.index')->middleware(['auth', 'User']);



// Auth::routes();