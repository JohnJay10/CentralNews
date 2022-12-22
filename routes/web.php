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



/* Pages Route*/
/* category nav post controller*/


Route::get('/', 'FrontController@allPost')->name('homepage');
Auth::routes();
require 'admin.php';

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories/{category:slug}', 'FrontController@categoryPostNav')->name('category-post');

Route::get('/{post:slug}', 'FrontController@singlePost')->name('single-post');















 /* category nav post controller*/

 







 


// Route::get('/sport', 'PagesController@sport')->name('sport');
// Route::get('/politics', 'PagesController@politics')->name('politics');
Route::get('/contact', 'PagesController@contact')->name('contact-us');
Route::get('/politicsview', 'PoliticsController@politicsview')->name('politicsview');
 Route::get('/latestnewsview', 'LatestNewsController@latestnewsview')->name('latestnewsview');
 Route::get('/sportview', 'SportController@sportview')->name('sportview');
 
 Route::get('get-more-pol','PagesController@index')->name('get-more-pol');


// /* Politics Controller*/
//   Route::resource('politics', 'PoliticsController');

// /* LatestNews Controller*/
//  Route::resource('latestnews','LatestNewsController');


// /* Sports Controller*/
//  Route::resource('sport','SportController');




