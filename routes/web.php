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

use App\Data;
 // This index route, taken here as soon as you log in. There is also a home route.




Route::get('/', 'HomeController@index');

//login Auth Route

Auth::routes();

//Logout route

Route::get('/logout', 'Auth\LoginController@logout');

//This is a created function for the AdminPostsController

Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'HomeController@post']);

//middleware/security for now. Admin role determines access.

Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', 'AdminController@index');

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
    Route::resource('/games', 'GamesController', ['names'=> [
        'showyear'=>'games.showyear'
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

    Route::resource('admin/games', 'AdminGamesController', ['names'=>[

        'index'=>'admin.games.index',
        'create'=>'admin.games.create',
        'store'=>'admin.games.store',
        'edit'=>'admin.games.edit',
        'show'=>'admin.games.show'
    ]]);
//    Route::get('admin/media/create', ['as' =>'admin.media.create', 'uses'=>'AdminMediasController@store']);

});

Route::get('/years/display/{id}', 'YearsController@getDisplay');

Route::resource('year', 'DataYearController');

Route::resource('years', 'YearsController');

Route::get('years/scrape', 'YearsController@scrape');

Route::get('datatable', 'DataTableController@datatable');
// Get Data
Route::get('datatable/getdata', 'DataTableController@getPosts')->name('datatable/getdata');

Route::get('datatable/yearview', 'DataTableController@yearview');

Route::get('scrape', ['uses' =>'ScrapeController@Scrape']);

// Route::get ( '/data', function () {
//     $data = Data::all ();
//     return view ( 'data' )->withData ( $data );
// } );


Route::delete('admin/delete/media', 'AdminMediasController@deleteMedia');

Route::group(['middleware'=>'auth'], function() {


    Route::post('reply/comment', 'CommentRepliesController@createReply');
});
Route::resource('/games', 'GamesController');

Route::get('/games/showyear', 'GamesController@showyear');

Route::get('/games/showseason/{id}', 'GamesController@showseason');

Route::resource('/teams', 'TeamsController');

Route::get('/teams/display/{teamdatas?}', 'TeamsController@display', function ($teamdatas = 'Oilers-84') {
    
    return $teamdatas;
});

Route::get('/teams/showteam/$team', 'TeamsController@showteam');

Route::get('/rounds/display/{rounddatas?}', 'RoundController@display', function ($rounddatas = 'R16') {
    
    return $rounddatas;
});

Route::get('/stages/display/{stagedatas?}', 'StageController@display', function ($stagedatas = 'R16') {
    
    return $stagedatas;
});



// Route::get ( '/data', function () {
//     $data = Data::all ();
//     return view ( 'data' )->withData ( $data );
// } );



//Route::get('/posts/{id}', ['as'=>'home.posts', 'uses'=>'PostsController@post']);

Route::get('/home', 'HomeController@index');

// Route::get('/post/{id}', ['as'=>'home.posts', 'uses'=>'PostsController@post']);
Route::get('/posts/all', ['uses'=>'PostsController@all']);
Route::resource('/posts', 'PostsController');




Route::resource('/players', 'PlayersController');