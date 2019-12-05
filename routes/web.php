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
//UserController
Route::get('/', 'UserControler@index')->name('index');

Route::post('store', 'UserControler@store')->name('store');

Route::get('show', 'UserControler@show')->name('show');

Route::get('create', 'UserControler@create')->name('create');

Route::get('create', 'UserControler@create')->name('create');
Route::get('singleUserPost', 'UserControler@singleUserPost')->name('singleUserPost');

//UserPost Controller

Route::get('indexuser', 'UserPostControler@indexuser')->name('indexuser');

Route::post('storeuser', 'UserPostControler@storeuser')->name('storeuser');

Route::get('showdata', 'UserPostControler@showdata')->name('showdata');

Route::get('UserCoomentView', 'UserPostControler@UserCommentView')->name('UserViewComment');

Route::get('UserComment', 'UserPostControler@UserComment')->name('UserComment');

Route::post('UserComment', 'UserPostControler@comment')->name('comment');

Route::get('commentShow', 'UserPostControler@commentshow')->name('commentShow');

Route::get('UserCommentView', 'UserPostControler@commentShow')->name('commentShow');

Route::get('commentPost', 'UserPostControler@commentPost')->name('commentPost');

Route::get('UserLike', 'UserPostControler@like')->name('like');

Route::post('UserLike', 'UserPostControler@createlike')->name('createlike');

//Routes make for Routes

Route::get('index', 'RouteController@index')->name('index');

Route::post('storeRoute', 'RouteController@storeRoute')->name('storeRoute');
Route::get('showRoute/{route_group_id}', 'RouteController@showRoute')->name('showRoute');

Route::get('destroy/{id}', 'RouteController@destroy')->name('destroy');

//routeGroup

Route::get('indexRouteGroup', 'RouteGroupController@indexRouteGroup')->name('indexRouteGroup');

Route::get('showRouteGroup', 'RouteGroupController@showRouteGroup')->name('showRouteGroup');

Route::post('storeRouteGroup', 'RouteGroupController@storeRouteGroup')->name('storeRouteGroup');

Route::get('editRouteGroup/{route_group_id}', 'RouteGroupController@editRouteGroup')->name('editRouteGroup');

Route::get('showRouteGroup', 'RouteGroupController@showRouteGroup')->name('showRouteGroup');

Route::post('updateRouteGroup/{route_group_id}', 'RouteGroupController@updateRouteGroup')->name('updateRouteGroup');

Route::get('destroyRouteGroup/{route_group_id}', 'RouteGroupController@destroyRouteGroup')->name('destroyRouteGroup');

Route::get('joins', 'RouteGroupController@joins')->name('joins');

//image insert route:

Route::get('indeximage', 'ImageController@indeximage')->name('indeximage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
