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

// Route::get('/test', [
// 	'as' => 'testpage',
// 	'uses' => 'ProductsController@test'
// 	]);


// Go to homepage
Route::get('/', [
	'as' => 'homepage',
	'uses' => 'PagesController@index'
	]);

// Display all products
Route::get('/products', [
	'as' => 'show.products',
	'uses' => 'ProductsController@showproducts'
	]);

// Display products in TYPE
Route::get('/products/type/{id}', [
	'as' => 'show.typeproducts',
	'uses' => 'ProductsController@showProductsInType'
	]);

// Display products in BRAND
Route::get('/types/{type_id}/brands/{id}', [
	'as' => 'show.brandproducts',
	'uses' => 'ProductsController@showProductsInBrand'
	]);

// Display DETAIL of one product
Route::get('/product/detail/{id}', [
	'as' => 'detail',
	'uses' => 'ProductsController@detail'
	]);

// Display ABOUT page
Route::get('/about', [
	'as' => 'about',
	'uses' => 'PagesController@about'
	]);

// Display CONTACT page
Route::get('/contact', [
	'as' => 'contact',
	'uses' => 'PagesController@contact'
	]);

// Display DELIVERY page
Route::get('/delivery', [
	'as' => 'delivery',
	'uses' => 'PagesController@delivery'
	]);

// Display LOGIN page
Route::get('/login', [
	'as' => 'login',
	'uses' => 'Auth\AuthController@getLogin'
	]);

// POST LOGIN
Route::post('/login', 'Auth\AuthController@postLogin'); //POST Login

// Display REGISTER page
Route::get('/register', [
	'as' => 'register',
	'uses' => 'Auth\AuthController@getRegister'
	]);

// POST REGISTER
Route::post('/register', 'Auth\AuthController@postRegister');

// LOGOUT the system
Route::get('/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
	]);

// Display all searched products
Route::get('/search', [
	'as' => 'show.searchProducts',
	'uses' => 'ProductsController@search'
	]);

// Display ADMIN page with MIDDLEWARE
Route::group(['middleware' => 'auth'], function() {

	// Display MYCART page
	Route::get('/mycart', [
	'as' => 'mycart',
	'uses' => 'CartsController@cart'
	]);

	//Add to cart
	Route::get('/cart/{id}/add', [
		'as' => 'addToCart',
		'uses' => 'CartsController@addToCart'
		]);

	//Update item in cart
	Route::post('/cart/update', [
		'as' => 'updateItem',
		'uses' => 'CartsController@updateItem'
		]);

	//Remove item in cart
	Route::get('mycart/remove/{id}', [
		'as' => 'removeItem',
		'uses' => 'CartsController@removeItem'
		]);

	//Display admin dashbpoard page
	Route::get('/admin/dashboard', [
	'as' => 'admin.dashboard',
	'uses' => 'PagesController@adminDashboard'
	]);

	// Display User management page
	Route::get('/admin/UserManagement', [
		'as' => 'admin.userManagement',
		'uses' => 'PagesController@userManagement'
		]);

	//Display Product management page
	Route::get('/admin/ProductManagement', [
		'as' => 'admin.productManagement',
		'uses' => 'PagesController@productManagement'
		]);

	//Display Brand management page
	Route::get('/admin/BrandManagement', [
		'as' => 'admin.brandManagement',
		'uses' => 'PagesController@brandManagement'
		]);

	//Display Type management page
	Route::get('/admin/TypeManagement', [
		'as' => 'admin.typeManagement',
		'uses' => 'PagesController@typeManagement'
		]);

	//Display add product page
	Route::get('/admin/product/add', [
		'as' => 'admin.addProduct',
		'uses' => 'ProductsController@addProduct'
		]);
	//Store product into database
	Route::post('/admin/product/add', [
		'as' => 'admin.storeProduct',
		'uses' => 'ProductsController@storeProduct'
		]);

	//Get product id and DELETE it from database.
	Route::delete('/admin/product/{id}/delete', [
		'as' => 'admin.productDelete',
		'uses' => 'ProductsController@deleteProduct'
		]);

	//Get product id and display insert page to edit it.
	Route::get('admin/product/{id}/edit', [
		'as' => 'admin.productEdit', 
		'uses' => 'PagesController@productEdit'
		]);

	//Update product information
	Route::put('admin/product/{id}', [
		'as' => 'admin.updateProduct', 
		'uses' => 'ProductsController@updateProduct'
		]);

	//Display add BRAND page
	Route::get('/admin/brand/add', [
		'as' => 'admin.addBrand',
		'uses' => 'BrandsController@add'
		]);

	//Insert new BRAND into database
	Route::post('/admin/brand/add', [
		'as' => 'admin.storeBrand',
		'uses' => 'BrandsController@store'
		]);

	//Get BRAND id and display edit BRAND page
	Route::get('/admin/brand/{id}/edit', [
		'as' => 'admin.editBrand',
		'uses' => 'BrandsController@edit'
		]);

	//Update BRAND information 
	Route::put('/admin/brand/{id}', [
		'as' => 'admin.updateBrand',
		'uses' => 'BrandsController@update'
		]);

	//Get TYPE id and display edit TYPE page
	Route::get('/admin/type/add', [
		'as' => 'admin.addType',
		'uses' => 'TypesController@add'
		]);

	//Insert new TYPE to database
	Route::post('/admin/type/add', [
		'as' => 'admin.storeType',
		'uses' => 'TypesController@store'
		]);

	//Get TYPE id and display edit TYPE page
	Route::get('/admin/type/{id}/edit', [
		'as' => 'admin.editType',
		'uses' => 'TypesController@edit'
		]);

	//Update TYPE information
	Route::put('/admin/type/{id}/edit', [
		'as' => 'admin.updateType',
		'uses' => 'TypesController@update'
		]);
});

