<?php

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
    return view('home');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('main_page');
Route::get('/admin', 'AdminController@dashboard')->name('home');
Route::get('/pages/main_page', 'Main_pageController@index')->name('index.main_page');
Route::get('/pages/nutrients', 'NutrientsController@index')->name('index.nutrients');
Route::get('/pages/food_at_diseases', 'Food_at_diseasesController@index')->name('index.food_at_diseases');
// Route::get('/pages/{slug}', 'Food_at_diseasesController@food_at_diseases')->name('index.food_at_diseases');
Route::get('/pages/contacts', 'ContactsController@index')->name('index.contacts');
//Route::get('/{slug}', 'PageController@show')->name('show.page');
//Route::get('/{slug}', 'PageController@menu')->name('menu.page');
Route::post('/pages/search-page', 'SearchController@search')->name('search');
// Route::get('/pages/contacts', 'SearchController@email')->name('email');
