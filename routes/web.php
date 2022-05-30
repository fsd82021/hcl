<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ContactController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...
Route::get('/','App\Http\Controllers\front\HomeController@index')->name('home');


Route::get('/services','App\Http\Controllers\front\ServiceController@index')->name('front.services');
Route::get('/service/{id}','App\Http\Controllers\front\ServiceController@service')->name('single-service');


Route::get('/about','App\Http\Controllers\front\AboutController@index')->name('about');
Route::get('/tracking','App\Http\Controllers\front\TrackingController@index')->name('tracking');
Route::get('/request','App\Http\Controllers\front\RequestController@index')->name('request');
Route::get('/policy','App\Http\Controllers\front\PolicyController@index')->name('policy');
Route::get('/contact','App\Http\Controllers\front\ContactController@index')->name('contact');
Route::post('/contact','App\Http\Controllers\front\ContactController@contact')->name('contact.post');

Route::get('/contact/{id}', [ContactController::class, 'show'])->name("show.contact");
Route::get('/contact/show-reply/{id}', [ContactController::class, 'show_reply'])->name('contact.show-reply');
Route::post('/contact/contact-reply', [ContactController::class, 'contact_reply'])->name('contact.contact-reply');
Route::post('/contact','App\Http\Controllers\front\ContactController@contact_post')->name('direct_contact_post');

Auth::routes();

}
);
