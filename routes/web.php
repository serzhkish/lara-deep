<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\SiteInfoController;
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

/**
 * Приветствие пользователя
 */
Route::get('/', [UserController::class, 'welcome'])
    ->name('user::welcome');

/**
 * О сайте
 */
Route::get('/about', [SiteInfoController::class, 'index'])
    ->name('site::about');

/**
 * Новости
 */
Route::group([
    'prefix' => '/news',
    'as' => 'news::'
], function() {
    Route::get('/{id}', [NewsController::class, 'index'])
        ->where('id', '[0-9]+')
        ->name('index');
    Route::get('/card/{id}', [NewsController::class, 'card'])
        ->where('id', '[0-9]+')
        ->name('card');
    Route::get('/category', [NewsController::class, 'categories'])
        ->name('category');
});


/**
 * Админка
 */
Route::group([
    'prefix' => '/admin',
	'as' => 'admin::'
], function() {
    Route::get('/news', [AdminNewsController::class, 'index'])
        ->name('news_index');
    Route::get('/category', [AdminCategoryController::class, 'index'])
        ->name('category_index');
});