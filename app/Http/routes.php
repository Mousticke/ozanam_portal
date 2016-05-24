<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

/*
Route::get('/', function () {
    return view('welcome');

})->name('home');
*/
/*
Route::get('/', [
    'uses' => 'PostController@getDashboardIndex',
    'as' => 'welcome'
])->name('home');
*/

Route::get('/', [
    'uses' => 'PostController@getDashboardIndex',
    'as' => 'home',
]);

Route::get('/admin/pl_Admin', [

    'uses' => 'AdminController@getPanelAdmin',
    'as' => 'pl_admin',
    'middleware' => 'auth'
]);

Route::get('/admin/includes/manageActualite', [

    'uses' => 'AdminController@getGestionActualite',
    'as' => 'actualite',
    'middleware' => 'auth'
]);

Route::get('/admin/includes/manageCarousel', [

    'uses' => 'AdminController@getGestionCarousel',
    'as' => 'carousel',
    'middleware' => 'auth'
]);

Route::post('/contact', [
    'uses' => 'ContactController@postContact',
    'as' => 'contact'
]);

Route::post('/createcarousel', [

    'uses' => 'CarouselController@postCreateCarousel',
    'as' => 'carousel.create',
    'middleware' => 'auth'
]);

Route::post('/createmenu', [

    'uses' => 'MenuController@postCreateIcon',
    'as' => 'post.icon.create',
    'middleware' => 'auth'
]);

Route::post('/createicon', [

    'uses' => 'MenuController@postCreateMenu',
    'as' => 'post.menu.create',
    'middleware' => 'auth'
]);

Route::post('/createpost', [

    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create',
    'middleware' => 'auth'
]);

Route::get('/dashboard', [
    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::get('/delete-carousel/{carousel_id}', [

    'uses' => 'CarouselController@getDeleteCarousel',
    'as' => 'carousel.delete',
    'middleware' => 'auth',
]);

Route::get('/delete-link-admin/{menu_id}', [

    'uses' => 'MenuController@getDeleteLinkAdmin',
    'as' => 'link.delete.admin',
    'middleware' => 'auth',
]);

Route::get('/delete-post/{post_id}', [

    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => 'auth',
]);

Route::get('/delete-post-admin/{post_id}', [

    'uses' => 'AdminController@getDeletePostAdmin',
    'as' => 'post.delete.admin',
    'middleware' => 'auth',
]);

Route::post('/edit', [

    'uses' => 'PostController@postEditPost',
    'as' => 'edit',
]);

Route::post('/editAdmin', [

    'uses' => 'AdminController@postEditPostAdmin',
    'as' => 'edit.admin',
]);

Route::post('/editMenu', [

    'uses' => 'AdminController@postEditMenuAdmin',
    'as' => 'edit.menu',
]);

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);


Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);













