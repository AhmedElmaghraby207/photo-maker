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


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
    //return view('admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin Routes

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){

    Route::get('/', 'AdminController@index');
    Route::resource('/profile', 'ProfileController');
    Route::resource('/homePhotos', 'HomePhotosController');
    Route::resource('/about', 'AboutController');
    Route::resource('/customers', 'CustomersController');
    Route::resource('/services', 'ServicesController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/photos', 'PhotosController');
    Route::resource('/info', 'InfoController');
    Route::resource('/joins', 'JoinsController');
    Route::resource('/packages', 'PackagesController');
    Route::resource('/options', 'OptionsController');
    Route::resource('/orders', 'OrdersController');
    Route::resource('/settings', 'SettingController');
    Route::resource('/footer', 'FooterController');

    Route::get('/orders/send/{id}', [
       'uses' => 'OrdersController@send',
       'as' => 'send.email'
    ]);

});


// FrontEnd Routes

Route::group([], function (){

    Route::resource('/photo-maker-home', 'FrontHomeController');
    Route::resource('/photo-maker-about', 'FrontAboutController');
    Route::resource('/photo-maker-services', 'FrontServicesController');
    Route::resource('/photo-maker-gallery', 'FrontGalleryController');
    Route::resource('/photo-maker-contact', 'FrontContactController');

});



Route::get('/changeLanguage/{lang}', 'LanguagesController@getChangeLanguage')->name('CHANGE_LANGUAGE')->middleware('lang');


Route::get('/email', function (){
    Mail::send('emails.reply', ['name' => 'Photo Maker'], function ($message)
    {
       $message->to('ahmed.elmaghraby207@gmail.com', 'Photo Maker')->from('photo.maker@example.com')->subject('Welcome');
    });
});