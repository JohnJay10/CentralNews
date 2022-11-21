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

// Route::get('/', function () {
//     return view('welcome');
// });

/* Pages Route*/
Route::get('/', 'PagesController@index')->name('homepage');
Route::get('/sport', 'PagesController@sport')->name('sport');
// Route::get('/politics', 'PagesController@politics')->name('politics');
Route::get('/contact', 'PagesController@contact')->name('contact-us');
Route::get('/politicsview', 'PoliticsController@politicsview')->name('politicsview');
 Route::get('/latestnewsview', 'LatestNewsController@latestnewsview')->name('latestnewsview');
 Route::get('/sportview', 'SportController@sportview')->name('sportview');


/* Politics Controller*/
 Route::resource('politics', 'PoliticsController');

/* LatestNews Controller*/
Route::resource('latestnews','LatestNewsController');


/* Sports Controller*/
Route::resource('sport','SportController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

