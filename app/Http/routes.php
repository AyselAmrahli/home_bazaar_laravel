<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'pageController@indexPage');

Route::get('/contact', 'pageController@contactPage');

Route::get('/about', 'pageController@aboutPage');

Route::get('/bloglist', 'pageController@blogListPage');

Route::get('/blogsingle', 'pageController@blogSinglePage');

Route::get('/delivery', 'pageController@deliveryPage');

Route::get('/offers', 'pageController@offersPage');

Route::get('/shopsidebar', 'pageController@shopSideBarPage');

Route::get('/shopsingle', 'pageController@shopSinglePage');

Route::get('/wishlist', 'pageController@wishListPage');




//Admin
Route::get('/Admin',function(){
  return view('Admin.index');
});
Route::get('/productList',function(){
  return view('Admin.productList');
});

Route::get('/addProduct',function(){
  return view('Admin.addProduct');
});

Route::get('/categoryList',function(){
  return view('Admin.categoryList');
});

Route::get('/addCategory', 'CategoryController@create');
Route::post('/addCategory', 'CategoryController@store');
Route::get('/categoryList', 'CategoryController@show');
