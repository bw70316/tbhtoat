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

use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');





Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){
        return view('admin.index');
    });

    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/posts', 'AdminPostsController');
    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::resource('admin/media', 'AdminMediasController');
    Route::resource('admin/comments', 'PostsCommentsController');
    Route::resource('admin/comment/replies', 'CommentRepliesController');
//    Route::get('admin/media/create', ['as' =>'admin.media.create', 'uses'=>'AdminMediasController@store']);

});

Route::get('/blog', function() {
    return view('blog');
});



Route::group(['middleware'=>'auth'], function() {


    Route::post('reply/comment', 'CommentRepliesController@createReply');
});

Route::resource('/games', 'GamesController');

Route::resource('/posts', 'PostsController');

Route::resource('/players', 'PlayersController');

//Route::resource('/admin/comments', 'PostsCommentsController');

//Route::resource('/admin/comments/replies', 'CommentRepliesController');

//Route::get('/addGame', function() {
//    return view('addGame');
//});
//
//Route::get('/gameData', function(){
//
//    return view('gameData');
//});
//
//Route::get('/addPlayer', function() {
//    return view('addPlayer');
//});
//
//Route::get('/playerData', function() {
//    return view('playerData');
//});

