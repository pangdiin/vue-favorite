<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'PostController@index');

Route::post('favorite/{post}', 'PostController@favoritePost');
Route::post('unfavorite/{post}', 'PostController@unFavoritePost');

Route::get('my_favorites', 'UsersController@myFavorites')->middleware('auth');

