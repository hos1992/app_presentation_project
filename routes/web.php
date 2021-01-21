<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix('admin')->namespace('Admin')->group(function () {

    // get the login page for the admin
    Route::get('login', 'AuthController@login');
    Route::post('login', 'AuthController@loginPost')->name('adminLogin');

    Route::middleware('check_admin_auth')->group(function () {

        // logged in admin routes will be placed here
        Route::get('/', 'MainController@home');
        Route::get('/logout', function () {
            auth()->guard('admin')->logout();
            return back();
        });

        // sections controller
        Route::resource('website-sections', 'SectionsController');

        // settings controller
        Route::get('settings/edit', 'SettingsController@edit');
        Route::post('settings/edit', 'SettingsController@update');

    });

});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware('set_locale')->namespace('Web')->group(function () {
    Route::get('/', 'MainController@home');
    Route::get('/set-locale/{locale}', 'MainController@setLocale');
});

