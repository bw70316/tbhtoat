<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


 // This index route, taken here as soon as you log in. There is also a home route.

Route::get('/', function () {
    return view('welcome');
});

//login Auth Route

Auth::routes();

//Logout route

Route::get('/logout', 'Auth\LoginController@logout');

//This is a created function for the AdminPostsController

Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);

//middleware/security for now. Admin role determines access.

Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){
        return view('admin.index');
    });


    //admin.layouts is utilizing a route function to access these routes. The names array is changing the controller
    //routes I believe to reflect the correct routes. This is nec. b/c if you run a "php artisan route:list" the "admin"
    //portion of our routes were missing due to the upgrade. After doing this, click on each aspect of the admin to ensure
    //the routes are working correctly.


    Route::resource('admin/users', 'AdminUsersController', ['names'=>[

        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
         'store'=>'admin.users.store',
        'edit'=>'admin.users.edit',


    ]]);



    Route::resource('admin/posts', 'AdminPostsController', ['names'=> [

        'index'=>'admin.posts.index',
        'create'=>'admin.posts.create',
        'store'=>'admin.posts.store',
        'edit'=>'admin.posts.edit',
    ]]);


    Route::resource('admin/categories', 'AdminCategoriesController', ['names'=> [

        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'store'=>'admin.categories.store',
        'edit'=>'admin.categories.edit',
    ]]);



    Route::resource('admin/media', 'AdminMediasController', ['names'=> [

        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
        'store'=>'admin.media.store',
        'edit'=>'admin.media.edit',
    ]]);


    Route::resource('admin/comments', 'PostsCommentsController', ['names'=> [

        'index'=>'admin.comments.index',
        'create'=>'admin.comments.create',
        'store'=>'admin.comments.store',
        'edit'=>'admin.comments.edit',
        'show'=>'admin.comments.show',
    ]]);


    Route::resource('admin/comment/replies', 'CommentRepliesController', ['names'=>[

        'index'=>'admin.replies.index',
        'create'=>'admin.replies.create',
        'store'=>'admin.replies.store',
        'edit'=>'admin.replies.edit',
        'show'=>'admin.replies.show'
    ]]);


//    Route::get('admin/media/create', ['as' =>'admin.media.create', 'uses'=>'AdminMediasController@store']);

});

Route::group(['middleware'=>'auth'], function() {


    Route::post('reply/comment', 'CommentRepliesController@createReply');
});


Route::resource('/games', 'GamesController');

//Route::get('/posts/{id}', ['as'=>'home.posts', 'uses'=>'PostsController@post']);


Route::resource('/posts', 'PostsController');


Route::resource('/players', 'PlayersController');