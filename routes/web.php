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

Route::get('/', 'ArticleController@index' )->name('article.index');

Route::get('articles/{article}', 'ArticleController@show')->name('article.show');
Route::view('add', 'add')->name('article.add.form');
Route::post('articles', 'ArticleController@store')->name('article.add');
Route::post('articles/{article}', 'ArticleController@update')->name('article.edit');
Route::get('edit/{article}', 'ArticleController@edit')->name('article.edit.form');
Route::delete('articles/{article}', 'ArticleController@destroy')->name('article.delete');
