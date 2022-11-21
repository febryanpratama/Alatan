<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecruitmentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('auth/admin/login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('auth/admin/login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::get('auth/admin/logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);
// Route::get('auth/admin/register', [
//     'as' => 'register',
//     'uses' => 'Auth\RegisterController@showRegistrationForm'
// ]);
// Route::post('auth/admin/register', [
//     'as' => '',
//     'uses' => 'Auth\RegisterController@register'
// ]);

Route::get('/', 'HomeController@index')->name('landing');
Route::get('regulation', 'HomeController@regulation')->name('regulation');
Route::get('blog', 'HomeController@blog')->name('blog');
Route::get('recruitment', [HomeController::class, 'recruitment'])->name('recruitment');
Route::get('blog/search', 'HomeController@blogsearch')->name('blog.search');
Route::get('blog/detail/{slug}', 'HomeController@blogdetail')->name('blog.detail');
Route::get('blog/categories/{slug}', 'HomeController@blogcategories')->name('blog.categories');
Route::get('admin/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('admin/settings', 'AdminController@settings')->name('settings');
Route::post('admin/settings', 'AdminController@settings_save')->name('settings.save');


Route::resource('admin/posts', 'PostController', ['names' => 'posts']);
Route::resource('admin/categories', 'CategoryController', ['names' => 'categories']);
Route::resource('admin/regulations', 'RegulationController', ['names' => 'regulations']);

Route::prefix('admin/recruitment')->group(function () {
    Route::get('/', [RecruitmentController::class, 'index']);
});

Route::post('ckeditor/upload', 'PostController@ckeditor')->name('ckeditor.upload');

Route::post('blog/comments/post/{id}', 'CommentController@store')->name('comments.store');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
