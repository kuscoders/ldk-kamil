<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        // dashboard
        Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');

        //permissions
        Route::resource('/permission', 'Admin\PermissionsController', [
            'except' => ['show', 'create', 'edit', 'update', 'delete'], 'as' => 'admin'
        ]);

        //roles
        Route::resource('/role', 'Admin\RoleController', [
            'except' => ['show'], 'as' => 'admin'
        ]);

        //users
        Route::resource('/user', 'Admin\UserController', [
            'except' => ['show'], 'as' => 'admin'
        ]);

        //users
        Route::resource('/kader', 'Admin\KaderController', [
            'as' => 'admin'
        ]);

        // kategori
        Route::resource('/kategori', 'Admin\CategoryController', [
            'except' => ['show'], 'as' => 'admin'
        ]);

        // artikel
        Route::resource('/blog', 'Admin\BlogController', [
            'as' => 'admin'


        ]);
        
        Route::prefix('galeries')->group(function () {
            Route::get('','Admin\GalleryController@index');
            Route::get('create','Admin\GalleryController@create');
            Route::get('{id}','Admin\GalleryController@edit');
            Route::post('store','Admin\GalleryController@store');
            Route::get('delete/{id}','Admin\GalleryController@delete');
            Route::post('update/{id}','Admin\GalleryController@update');
        });
    });
});
