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
//     // return 'Hello Laravel';
    
// });
//Backend
Route::middleware('auth')->group(function (){

	Route::get('dashboard','BackendController@dashboard')->name ('dashboard');

	Route::resource('orders','OrderController');


	Route::resource('items','ItemController');
// 7   (get-4 / post-1 / put-1 / delete-1)

	Route::resource('brands','BrandController');
//7   (get-4 / post-1 / put-1 / delete-1)

	Route::resource('categories','CategoryController');

	Route::resource('subcategories','SubcategoryController');
});

// End Backend---------


//Frontend
Route::get('/','FrontendController@home')->name('home');

Route::get('itemdetail/{id}','FrontendController@itemdetail')->name('itemdetail');

Route::get('filter_checkout','FrontendController@filter_checkout')->name('checkout');
Route::get('filter_detail','FrontendController@filter_detail')->name('filter_detail');
Route::get('login','FrontendController@login')->name('loginpage');
Route::get('profile','FrontendController@filter_profile')->name('profile');
Route::get('register','FrontendController@filter_register')->name('registerpage');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
