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

Route::get('/', function () {
    return view('dashboard.dashboard');
});

 


// Product (User)
Route::get('/product/input','ProductUserController@inputproduct')->name('input.product');
Route::get('/product/lihat','ProductUserController@lihatproduct')->name('lihat.product');
Route::post('/product/tambah','ProductUserController@store')->name('product.store');
Route::get('/product/edit/{id}','ProductUserController@edit')->name('product.edit');
Route::put('/product/edit/{id}','ProductUserController@update')->name('product.update');
Route::get('/product/hapus/{id}','ProductUserController@destroy')->name('product.destroy');

// User (Admin)
Route::get('/user/indexuser','AdminController@indexuser')->name('index.user');
Route::get('/user/inputuser','AdminController@create')->name('create.user');
Route::post('/user/inputuser','AdminController@store')->name('store.user');
Route::get('/user/edituser/{id}','AdminController@edit')->name('edit.user');
Route::put('/user/edituser/{id}','AdminController@update')->name('update.user');
Route::delete('/user/deleteuser/{id}','AdminController@destroy')->name('destroy.user');
// Product (Admin)
Route::get('/product/lihat','AdminController@lihatproduct')->name('product.lihat');
Route::get('/product/hapus/{id}','AdminController@destroy_product')->name('product.hapus');
// Contact (Admin)



// dashboard
Route::get('/dashboard/berita','DashboardController@shop')->name('dashboard.shop');
// contact(dashboard)
Route::get('/dashboard/contact','DashboardController@contact')->name('dashboard.contact');
Route::post('/contact/tambah','DashboardController@contact_store')->name('contact.store');

Route::get('/contact/lihat','AdminController@lihatcontact')->name('lihat.contact');
Route::delete('/contact/hapus/{id}','AdminController@destroy_contact')->name('contact.destroy');
Route::get('/contact/detail/{id}','AdminController@detail')->name('contact.detail');




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

