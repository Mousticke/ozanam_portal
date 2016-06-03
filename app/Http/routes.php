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

/**
 *                                                      Partie public
 */

Route::get('/', [
    'uses' => 'PostController@getDashboardIndex',
    'as' => 'home',
]);

/**
 *                                                      Partie Connectée
 */
Route::get('/dashboard', [
    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);



/**
 *                                                  Partie admin
 */
/*******************************************************PANEL*******************************************************/
Route::get('/admin/pl_Admin', [

    'uses' => 'AdminController@getPanelAdmin',
    'as' => 'pl_admin',
    'middleware' => 'auth'
]);

/*******************************************************MENU*******************************************************/
Route::get('/admin/pl_Admin/manageNavbar', [

    'uses' => 'MenuController@getMenuAdmin',
    'as' => 'admin_menu',
    'middleware' => 'auth'
]);
Route::post('/admin/pl_Admin/editMenu', [

    'uses' => 'MenuController@postEditMenuAdmin',
    'as' => 'edit.menu',
]);

Route::post('/admin/pl_Admin/createmenu', [

    'uses' => 'MenuController@postCreateIcon',
    'as' => 'post.icon.create',
    'middleware' => 'auth'
]);

Route::post('/admin/pl_Admin/createicon', [

    'uses' => 'MenuController@postCreateMenu',
    'as' => 'post.menu.create',
    'middleware' => 'auth'
]);

Route::get('/admin/pl_Admin/delete-link-admin/{menu_id}', [

    'uses' => 'MenuController@getDeleteLinkAdmin',
    'as' => 'link.delete.admin',
    'middleware' => 'auth',
]);

Route::get('/admin/pl_Admin/delete-icon-admin/{icon_id}', [

    'uses' => 'MenuController@getDeleteIconAdmin',
    'as' => 'icon.delete.admin',
    'middleware' => 'auth',
]);

/*******************************************************ACTUALITE*******************************************************/
Route::get('/admin/pl_admin/manageActualite', [

    'uses' => 'PostController@getManageActualiteAdmin',
    'as' => 'admin_actualite',
    'middleware' => 'auth'
]);

Route::get('/admin/pl_Admin/delete-post-admin/{post_id}', [

    'uses' => 'PostController@getDeleteActualiteAdmin',
    'as' => 'post.delete.admin',
    'middleware' => 'auth',
]);

Route::post('/admin/pl_Admin/editAdmin', [

    'uses' => 'PostController@postEditActualiteAdmin',
    'as' => 'edit.admin',
]);

Route::post('/admin/pl_Admin/createpost', [

    'uses' => 'PostController@postCreateActualite',
    'as' => 'post.create',
    'middleware' => 'auth'
]);

/*******************************************************CAROUSEL*******************************************************/
Route::get('/admin/pl_admin/manageCarousel', [

    'uses' => 'CarouselController@getManageCarouselAdmin',
    'as' => 'admin_carousel',
    'middleware' => 'auth'
]);

Route::post('/admin/pl_Admin/createcarousel', [

    'uses' => 'CarouselController@postCreateCarousel',
    'as' => 'carousel.create',
    'middleware' => 'auth'
]);

Route::get('/admin/pl_Admin/delete-carousel/{carousel_id}', [

    'uses' => 'CarouselController@getDeleteCarousel',
    'as' => 'carousel.delete',
    'middleware' => 'auth',
]);

/**
 *                                                  Partie utilisateur
 */
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

/**
 *                                                  Partie de contact
 */

Route::post('/contact', [
    'uses' => 'ContactController@postContact',
    'as' => 'contact'
]);


/**
 *                                                  Les versions obsolètes
 */
Route::post('/edit', [

    'uses' => 'PostController@postEditPost',
    'as' => 'edit',
]);

Route::get('/delete-post/{post_id}', [

    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => 'auth',
]);












