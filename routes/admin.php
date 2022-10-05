<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

use Companybase\Http\Controllers\Admin\UserController;

use Companybase\Http\Controllers\Admin\AdminController;

use Companybase\Http\Controllers\Auth\LoginController;

use Companybase\Http\Controllers\Auth\RegisterController;

use Companybase\Http\Controllers\Admin\SettingController;

use Companybase\Http\Controllers\Admin\TagController;


Route::group(['prefix' => 'admin', 'middleware' => ['web', 'CheckLogedIn']], function () {//, 'middleware' => 'CheckLogedIn'
    Route::get('login', [LoginController::class, 'getLogin'])->name('login');
    Route::post('login', [LoginController::class, 'postLogin'])->name('login');
});

//register - user
Route::group(['prefix' => '/', 'middleware' => 'web'], function(){
    Route::get('register', [RegisterController::class, 'getRegister'])->name('register');

    Route::post('register', [RegisterController::class, 'postRegister'])->name('register');
});

Route::group(['middleware' => ['web']], function() {
    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'CheckLogedOut']], function(){
    Route::get('/home', [AdminController::class, 'index'])->name('admin.home');

    Route::get('/profile', [AdminController::class, 'profile'])->name('user.profile');

    Route::put('/change-info/{id}/user', [AdminController::class, 'profileUpdate'])->name('admin.change.info');

    Route::put('/change-avatar/{id}/user', [AdminController::class, 'updateAvatar'])->name('admin.change.avatar');

    Route::get('/change-password', [AdminController::class, 'changePassword']);

    Route::put('/change-password', [AdminController::class, 'changPasswordStore'])->name('admin.change.password');

    Route::Resource('/user', UserController::class)->only('index', 'destroy');



    Route::get('/setting-create', [SettingController::class, 'create'])->name('setting.create');

    Route::post('/setting-create', [SettingController::class, 'store'])->name('setting.store');

    Route::get('/setting', [SettingController::class, 'getSetting'])->name('admin.setting');

    Route::put('/setting', [SettingController::class, 'updateSetting'])->name('admin.setting');

    Route::Resource('/tag', TagController::class);
});
