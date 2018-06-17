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

Route::get('/', 'BookController@showBooks') -> name('homepage');

Route::post('/add', 'BookController@add')->name('add_book');

Route::post('/remove', 'BookController@remove')->name('delete_book');

Route::post('/detail', 'BookController@showDetails')->name('book_details');

Route::post('/update', 'BookController@editInfo')->name('update_info');
        