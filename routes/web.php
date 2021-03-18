<?php

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        // dashboard
        Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');

        //surat keluar
        Route::get('/surat/keluar', 'Admin\SuratController@index')->name('admin.surat.keluar.index');
        Route::get('/surat/keluar/create', 'Admin\SuratController@create')->name('admin.surat.keluar.create');
        Route::post('/surat/keluar', 'Admin\SuratController@store')->name('admin.surat.keluar.index');
        Route::get('/surat/keluar/{id}/read', 'Admin\SuratController@read')->name('admin.surat.keluar.read');
        Route::get('/surat/keluar/{id}/read/edit', 'Admin\SuratController@edit')->name('admin.surat.keluar.edit');
        Route::put('/surat/keluar/{id}/read', 'Admin\SuratController@update')->name('admin.surat.keluar.update');
        // Route::get('/surat/keluar/{id}/edit', 'Admin\SuratController@edit')->name('admin.surat.keluar.edit');
        // Route::put('/surat/{id}/keluar', 'Admin\SuratController@update')->name('admin.surat.keluar.update');
        Route::delete('/surat/keluar/{id}/read', 'Admin\SuratController@destroy')->name('admin.surat.keluar.destroy');
        Route::get('/surat/keluar', 'Admin\SuratController@cari')->name('admin.surat.keluar.cari');
        Route::get('/surat/keluar/json', 'Admin\SuratController@datajson')->name('admin.surat.keluar.json');
        
        //surat masuk
        Route::get('/surat/masuk', 'Admin\SuratMasukController@index')->name('admin.surat.masuk.index');
        Route::get('/surat/masuk/create', 'Admin\SuratMasukController@create')->name('admin.surat.masuk.create');
        Route::post('/surat/masuk', 'Admin\SuratMasukController@store')->name('admin.surat.masuk.index');
        Route::get('/surat/masuk/{id}/read', 'Admin\SuratMasukController@read')->name('admin.surat.masuk.read');
        Route::get('/surat/masuk/{id}/read/edit', 'Admin\SuratMasukController@edit')->name('admin.surat.masuk.edit');        
        Route::put('/surat/masuk/{id}/read', 'Admin\SuratMasukController@update')->name('admin.surat.masuk.update');
        Route::delete('/surat/{id}/masuk', 'Admin\SuratMasukController@destroy')->name('admin.surat.masuk.destroy');
        Route::get('/surat/masuk', 'Admin\SuratMasukController@cari')->name('admin.surat.masuk.cari');

        //surat generate
        Route::get('/surat/genrate', 'Admin\SuratGenerateController@index')->name('admin.surat.genrate.index');
        // Route::get('/surat/genrate/keluar', 'Admin\SuratGenerateController@keluar')->name('admin.surat.genrate.keluar');
        // Route::get('/surat/genrate/{id}/cetak', 'Admin\SuratGenerateController@cetak')->name('admin.surat.genrate.cetak');
        // Route::get('/surat/genrate/{id}/cetak_pdf', 'Admin\SuratGenerateController@cetak_pdf')->name('admin.surat.genrate.cetak_pdf');
        Route::get('/surat/genrate/keluar', 'Admin\SuratGenerateController@keluar')->name('admin.surat.genrate.keluar');
        Route::post('/surat/genrate/keluar/keluar_pdf', 'Admin\SuratGenerateController@keluar_pdf')->name('admin.surat.genrate.keluar_pdf');
        Route::get('/surat/genrate/izinRuangan', 'Admin\SuratGenerateController@izinRuangan')->name('admin.surat.genrate.izinRuangan');
        Route::post('/surat/genrate/izinRuangan/izinRuangan_pdf', 'Admin\SuratGenerateController@izinRuangan_pdf')->name('admin.surat.genrate.izinRuangan_pdf');
        Route::get('/surat/genrate/undangan', 'Admin\SuratGenerateController@undangan')->name('admin.surat.genrate.undangan');
        Route::post('/surat/genrate/keluar/undangan_pdf', 'Admin\SuratGenerateController@undangan_pdf')->name('admin.surat.genrate.undangan_pdf');
        
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

    
    });
});
