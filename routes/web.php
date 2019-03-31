<?php

use App\Category;
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
    $categories = Category::get();
    return view('welcome')->with(compact('categories'));
});
Route::get('/contact', 'ContactController@viewContact');
Route::match(['get', 'post'], '/send-mail', 'ContactController@sendMail');

Route::match(['get', 'post'], '/admin', 'AdminController@login');

Auth::routes();

Route::get('/home', function () {

    return redirect('/');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/settings', 'AdminController@settings');
    Route::get('/admin/check-pwd', 'AdminController@checkPassword');

    Route::match(['get', 'post'], '/admin/update-pwd', 'AdminController@updatePassword');
    Route::get('/admin/viewUsers', 'AdminController@viewUsers');

    //Categories Routes (Admin)
    Route::match(['get', 'post'], '/admin/add-category', 'CategoryController@addCategory');
    Route::get('/admin/view-category', 'CategoryController@viewCategory');
    Route::get('/admin/pending-orders', 'OrderController@pendingOrders');
    Route::get('/admin/accepted-orders', 'OrderController@acceptedOrders');
    Route::get('/admin/working-orders', 'OrderController@workingOrders');
    Route::get('/admin/completed-orders', 'OrderController@completedOrders');
    Route::match(['get', 'post'], '/admin/accepted-orders/{id}', 'OrderController@acceptNewOrder');
    Route::match(['get', 'post'], '/admin/working-orders/{id}', 'OrderController@currentlyWorkingOrder');
    Route::match(['get', 'post'], '/admin/completed-orders/{id}', 'OrderController@forcompletedOrder');

    Route::get('/admin/accepted-orders', 'OrderController@acceptedOrders');
    Route::match(['get', 'post'], '/admin/edit-category/{id}', 'CategoryController@editCategory');
    Route::match(['get', 'post'], '/admin/delete-category/{id}', 'CategoryController@deleteCategory');

    //user
    Route::get('/profile', 'HomeController@profile');
    Route::get('/place-order', 'OrderController@placeOrder');
    Route::get('/free-trial', 'OrderController@freeTrial');
    Route::match(['get', 'post'], '/place-order-submit', 'OrderController@placeOrderSubmit');
    Route::match(['get', 'post'], '/free-trial-submit', 'OrderController@freeTrialSubmit');
});

Route::get('/logout', 'AdminController@logout');
