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
//     return view('dashboard.dashboard');
// });

 
Route::get('/','DashboardController@dashboard')->name('dashboard');


// Product (User)
Route::get('/product/input','ProductUserController@inputproduct')->name('input.product');
Route::get('/product/data','ProductUserController@lihatproduct')->name('lihat.product');
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
Route::get('/contact/lihat','AdminController@lihatcontact')->name('lihat.contact');
Route::delete('/contact/hapus/{id}','AdminController@destroy_contact')->name('contact.destroy');
Route::get('/contact/detail/{id}','AdminController@detail')->name('contact.detail');
// contact(dashboard)
Route::get('/dashboard/contact','DashboardController@contact')->name('dashboard.contact');
Route::post('/contact/tambah','DashboardController@contact_store')->name('contact.store');
// Berita (Admin)
Route::get('/berita/input','AdminController@inputberita')->name('berita.input');
Route::post('/berita/tambah','AdminController@storeberita')->name('berita.store');
Route::get('/berita/lihat','AdminController@lihatberita')->name('lihat.berita');
Route::get('/berita/edit/{id}','AdminController@editberita')->name('berita.edit');
Route::put('/berita/edit/{id}','AdminController@updateberita')->name('berita.update');
Route::get('/berita/hapus/{id}','AdminController@destroyberita')->name('berita.destroy');


// dashboard
Route::get('/dashboard/shop','DashboardController@shop')->name('dashboard.shop');
Route::get('/dashboard/berita','DashboardController@berita')->name('dashboard.berita');






Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

