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

Route::get('/cmd', function () {
    chdir('../');
    $dir =  getcwd();
    print_r($dir);
    $cmd = shell_exec ('php artisan cache:clear');
    return $cmd;
});

Route::post('/cdt', [
    'uses' => 'UserController@getCahier',
    'as' => 'testCahier',
    'middleware' => 'auth'
]);

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
    'middleware' => 'admin'
]);

Route::get('/admin/pl_Admin/users', [

    'uses' => 'AdminController@getUsersAdmin',
    'as' => 'admin_users',
    'middleware' => 'admin'
]);

/*******************************************************Quick access***********************************************/
Route::get('/admin/pl_Admin/manageQuickAccess', [

    'uses' => 'QuickAccessController@getQuickAccess',
    'as' => 'admin_quick_access',
    'middleware' => 'admin'
]);

Route::get('/admin/pl_Admin/delete-access-admin/{access_id}', [

    'uses' => 'QuickAccessController@getDeleteAccessAdmin',
    'as' => 'access.delete.admin',
    'middleware' => 'admin',
]);

Route::post('/admin/pl_Admin/editAccess', [

    'uses' => 'QuickAccessController@postEditAccessAdmin',
    'as' => 'edit.access',
    'middleware' => 'admin'
]);

Route::post('/admin/pl_Admin/createaccess', [

    'uses' => 'QuickAccessController@postCreateAccess',
    'as' => 'access.create',
    'middleware' => 'admin'
]);

/*******************************************************RSS*******************************************************/
Route::get('/admin/pl_Admin/RSSfeed', [

    'uses' => 'RSSController@getRSSfeed',
    'as' => 'admin_rss',
    'middleware' => 'admin'
]);

Route::post('/admin/pl_Admin/createrss', [

    'uses' => 'RSSController@postCreateRSS',
    'as' => 'post.rss.create',
    'middleware' => 'admin'
]);

/*******************************************************MENU*******************************************************/
Route::get('/admin/pl_Admin/manageNavbar', [

    'uses' => 'MenuController@getMenuAdmin',
    'as' => 'admin_menu',
    'middleware' => 'admin'
]);
Route::post('/admin/pl_Admin/editMenu', [

    'uses' => 'MenuController@postEditMenuAdmin',
    'as' => 'edit.menu',
]);

Route::post('/admin/pl_Admin/createmenu', [

    'uses' => 'MenuController@postCreateIcon',
    'as' => 'post.icon.create',
    'middleware' => 'admin'
]);

Route::post('/admin/pl_Admin/createicon', [

    'uses' => 'MenuController@postCreateMenu',
    'as' => 'post.menu.create',
    'middleware' => 'admin'
]);

Route::get('/admin/pl_Admin/delete-link-admin/{menu_id}', [

    'uses' => 'MenuController@getDeleteLinkAdmin',
    'as' => 'link.delete.admin',
    'middleware' => 'admin',
]);

Route::get('/admin/pl_Admin/delete-icon-admin/{icon_id}', [

    'uses' => 'MenuController@getDeleteIconAdmin',
    'as' => 'icon.delete.admin',
    'middleware' => 'admin',
]);

/*******************************************************ACTUALITE*******************************************************/
Route::get('/admin/pl_admin/manageActualite', [

    'uses' => 'PostController@getManageActualiteAdmin',
    'as' => 'admin_actualite',
    'middleware' => 'admin'
]);

Route::get('/admin/pl_Admin/delete-post-admin/{post_id}', [

    'uses' => 'PostController@getDeleteActualiteAdmin',
    'as' => 'post.delete.admin',
    'middleware' => 'admin',
]);

Route::post('/admin/pl_Admin/editAdmin', [

    'uses' => 'PostController@postEditActualiteAdmin',
    'as' => 'edit.admin',
    'middleware' => 'admin'
]);

Route::post('/admin/pl_Admin/createpost', [

    'uses' => 'PostController@postCreateActualite',
    'as' => 'post.create',
    'middleware' => 'admin'
]);

/*******************************************************CAROUSEL*******************************************************/
Route::get('/admin/pl_admin/manageCarousel', [

    'uses' => 'CarouselController@getManageCarouselAdmin',
    'as' => 'admin_carousel',
    'middleware' => 'admin'
]);

Route::post('/admin/pl_Admin/createcarousel', [

    'uses' => 'CarouselController@postCreateCarousel',
    'as' => 'carousel.create',
    'middleware' => 'admin'
]);

Route::get('/admin/pl_Admin/delete-carousel/{carousel_id}', [

    'uses' => 'CarouselController@getDeleteCarousel',
    'as' => 'carousel.delete',
    'middleware' => 'admin',
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
    'middleware' => 'admin'
]);

Route::get('/delete-post/{post_id}', [

    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => 'admin',
]);












