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

use App\Mail\ContactMessageCreated;

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/test-email', function() {
    return new ContactMessageCreated('Jean Dupont', 'jdupont@gmail.com', 'Fier de faire partie de la cummunauté Laracarte.');
});

Route::get('/about', [
    'as' => 'about',
    'uses' => 'PagesController@about'
]);

Route::get('/contact', 'ContactsController@create')->name('contact.create');

Route::post('/contact', [
    'as' => 'contact.store',
    'uses' => 'ContactsController@store'
]);
