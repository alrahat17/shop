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
    return view('welcome');
});

// Authentication Routes...
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('admin/home', 'AdminController@index');
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/password/reset', 'Admin\ResetPasswordController@reset');

         


Auth::routes();


//customer part
Route::resource('customerproducts','CustomerProductController');
Route::get('/','CustomerProductController@index');
Route::get('product_by_item/{id}','CustomerProductController@show_product_by_item')->name('product_by_item');
Route::get('product_by_brand/{id}','CustomerProductController@show_product_by_brand')->name('product_by_brand');



//Cart
Route::post('/add_to_cart','CartController@add_to_cart');
Route::get('/checkout','CartController@show_checkout')->name('checkout');
Route::post('/checkout','CartController@show_checkout')->name('checkout');
Route::get('/show_cart','CartController@show_cart');
Route::get('/delete_cart_item/{rowId}','CartController@delete_cart_item');
Route::get('/inc_qty/{rowId}/{qty}','CartController@inc_qty');
Route::get('/dec_qty/{rowId}/{qty}','CartController@dec_qty');

//Checkout,Order

    

//Other Pages

Route::get('/contact','CustomerProductController@show_contact');
Route::get('/blog','CustomerProductController@show_blog');
Route::get('/blog_detail','CustomerProductController@show_blog_detail');
Route::get('/about','CustomerProductController@show_about');
Route::get('/show_products','CustomerProductController@show_products');




//Category
Route::resource('categories','CategoryController');
Route::get('/active_category/{id}','CategoryController@active_category');
Route::get('/inactive_category/{id}','CategoryController@inactive_category');

//Brands
Route::resource('brands','BrandsController');
Route::get('/active_brand/{id}','BrandsController@active_brand');
Route::get('/inactive_brand/{id}','BrandsController@inactive_brand');

//Items
Route::resource('items','ItemsController');
Route::get('/active_item/{id}','ItemsController@active_item');
Route::get('/inactive_item/{id}','ItemsController@inactive_item');


//Products
Route::get('products','ProductsController@index');
Route::GET('products/create','ProductsController@create')->name('products.create');              

Route::DELETE('products/{product_id}','ProductsController@destroy')->name('products.destroy');        
Route::POST('products','ProductsController@store')->name('products.store');      
Route::GET('products/{product_id}','ProductsController@show')->name('products.show');
Route::GET('products/{product_id}/edit','ProductsController@edit')->name('products.edit');
Route::PUT('products/{product_id}','ProductsController@update')->name('products.update');           

Route::get('/active_product/{id}','ProductsController@active_product');
Route::get('/inactive_product/{id}','ProductsController@inactive_product');


//For admin to view Orders and Order Items

Route::resource('orders','OrderController');

Route::resource('order_items','Order_itemsController');

//For customer to confirm order
Route::post('/save_order','CartController@save_order');  

