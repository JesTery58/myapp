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

use App\Http\Controllers\BaseController;
    Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');


    Route::any('/web-setting', 'GeneralsettingController@index');
    Route::any('/web-setting/update', 'GeneralsettingController@update');
    Route::any('/web-setting/robottxt', 'GeneralsettingController@robot');
    Route::any('/web-setting/popup', 'PopupController@index');

    Route::any('/contact-setting', 'ContactController@index');
    Route::any('/contact-setting/update/{id}', 'ContactController@update');
    Route::any('/contact-setting/create', 'ContactController@create');
    Route::any('/contact-setting/delete/{id}', 'ContactController@delete');

    Route::any('/mail-setting', 'MailsettingController@index');
    Route::any('/mail-setting/update', 'MailsettingController@update');

    Route::any('/language-setting', 'LanguageController@index');
    Route::any('/language-setting/update/{id}', 'LanguageController@update');
    Route::any('/language-setting/create', 'LanguageController@create');
    Route::any('/language-setting/delete/{id}', 'LanguageController@delete');
    Route::any('/language-setting/langedit/{id}', 'LanguageController@langedit');

    Route::any('/sosial-setting', 'SosialController@index');
    Route::any('/sosial-setting/update/{id}', 'SosialController@update');
    Route::any('/sosial-setting/create', 'SosialController@create');
    Route::any('/sosial-setting/delete/{id}', 'SosialController@delete');

    Route::any('/slider', 'SliderController@index');
    Route::any('/slider/update/{id}', 'SliderController@update');
    Route::any('/slider/create', 'SliderController@create');
    Route::any('/slider/delete/{id}', 'SliderController@delete');

    Route::any('/blog', 'BlogController@index');
    Route::any('/blog/update/{id}', 'BlogController@update');
    Route::any('/blog/create', 'BlogController@create');
    Route::any('/blog/delete/{id}', 'BlogController@delete');


    Route::any('/pages', 'PageController@index');
    Route::any('/pages/update/{id}', 'PageController@update');
    Route::any('/pages/create', 'PageController@create');
    Route::any('/pages/delete/{id}', 'PageController@delete');


    Route::any('/category/{type}', 'CatagoryController@index');
    Route::any('/category/update/{type}/{id}', 'CatagoryController@update');
    Route::any('/category/create/{type}/{id}', 'CatagoryController@create');
    Route::any('/category/delete/{type}/{id}', 'CatagoryController@delete');

    Route::any('/messages/setting', 'MessageController@setting');
    Route::any('/messages/{type}', 'MessageController@index');
    Route::any('/messages/detail/{type}/{id}', 'MessageController@detail');
    Route::any('/messages/reply/{type}/{id}', 'MessageController@reply');
    Route::any('/messages/delete/{type}/{id}', 'MessageController@delete');

    Route::any('/products', 'ProductsController@index');
    Route::any('/products/update/{id}', 'ProductsController@update');
    Route::any('/products/create', 'ProductsController@create');
    Route::any('/products/delete/{id}', 'ProductsController@delete');
    Route::any('/products/copy/{id}', 'ProductsController@productCopy');
    Route::any('/products/al', 'ProductsController@productal');

    Route::any('/file-directory', 'FiledirectoryController@index');

    Route::get('/sendbasicemail','MailController@basic_email');
    Route::get('/sendhtmlemail','MailController@html_email');
    Route::get('/sendattachmentemail','MailController@attachment_email');
});

Route::any('/', [BaseController::class, 'index']);
Route::any('/urun/yapikredi', [BaseController::class, 'index']);
Route::any('/urun/zdonusum', [BaseController::class, 'index']);
Route::any('/urun/14-gun-ucretsiz-dene', [BaseController::class, 'index']);
Route::any('/aboutus', [BaseController::class, 'aboutus']);
Route::any('/integrations', [BaseController::class, 'integrations']);
Route::any('/change-language/{id}', [BaseController::class, 'language']);

