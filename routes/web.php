<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/','BookController@index')->name('books');
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback','Auth\LoginController@handleProviderCallback');
Route::get('/admin','BookController@admin')->name('admin.books');
Route::get('/admin/author','AuthorController@admin')->name('admin.authors');
Route::resource('book', 'BookController');
Route::resource('author', 'AuthorController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
