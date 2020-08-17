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

// Frontend---------------------------------------------------------------------
Route::get('/','FrontendController@home')->name('homepage');

Route::get('checkout','FrontendController@checkout')->name('checkoutpage');
Route::get('detail/{id}','FrontendController@detail')->name('detailpage');
Route::get('itemfilter','FrontendController@itemfilter')->name('itemfilterpage');
Route::get('login','FrontendController@login')->name('loginpage');
Route::get('profile','FrontendController@profile')->name('profilepage');
Route::get('register','FrontendController@register')->name('registerpage');


// Backend-----------------------------------------------------------------------
Route::middleware('role:admin')->group(function(){


Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');

Route::resource('items', 'ItemController');
//7 (get-4/ post-1/ put-1/ delete-1)
Route::resource('brands', 'BrandController');
//7 (get-4/ post-1/ put-1/ delete-1)

Route::resource('categories', 'CategoryController');

Route::resource('subcategories', 'SubcategoryController');
});
// End Backend-------------------------------------------------------------
Route::resource('orders','OrderController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::post('/getitems', 'FrontendController@getItems')->name('getitems');



