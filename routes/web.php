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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/home',function (){
//  return view('admin.home');
//});

Route::get('/','HomepageController@index')->name('home');

Route::resource('/page/product','Page\ProductController');

Route::get('/page/contact','Page\ContactController@index')->name('contact');

Route::get('/page/downview','Page\ContactController@downview')->name('down.view');

Route::get('/page/fivewinsoft','Page\ContactController@remotedown')->name('fivewinsoft');

Route::get('/page/fivedatabasedit','Page\ContactController@fivedatabase')->name('fivedatabasedit');

Route::get('/page/fiveapk','Page\ContactController@fiveapk')->name('fiveapk');

Route::get('/page/fivedatab','Page\ContactController@fivedata')->name('fivedata');

Route::get('/page/fivevidcode','Page\ContactController@fivevidcode')->name('fivevidcode');

Route::get('/page/directx','Page\ContactController@directx')->name('directx');

Route::get('/page/fiveram','Page\ContactController@fiveram')->name('fiveram');

Route::get('/page/databasepdf','Page\ContactController@databasepdf')->name('databasepdf');

Route::get('/page/fiveinstallpdf','Page\ContactController@fiveinstallpdf')->name('fiveinstallpdf');

Route::get('/page/fivetabletguide','Page\ContactController@fivetabletguide')->name('fivetabletguide');

//Route::get('/page/mi5remote','Page\ProductController@fiveremote')->name('fiveremote');

//Route::get('/page/product','Page\ProductController@index')->name('product.index');

Route::get('/locale/{locale}',function ($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});
