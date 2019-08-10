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

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', 'StudentController@index')->name('students');

// Class Route
Route::group(
    [
        'prefix' => 'classes',
        'as' => 'classes.',
        'middleware' => ['auth', 'active.admin']
    ],
    function () {
        Route::get('/', 'ClassRoomController@index')->name('list');
        Route::get('add', 'ClassRoomController@createForm')->name('add');
        Route::post('create-post', 'ClassRoomController@create')->name('create-post');
        Route::get('{class}/edit', 'ClassRoomController@editForm')->name('edit');
        Route::post('update-post', 'ClassRoomController@update')->name('update');
    }
);
// Route::get('classes', 'ClassRoomController@index')->name('classes');
// Route::get('classes/add', 'ClassRoomController@createForm')->name('classes.add-form');
// Route::post('classes/create-post', 'ClassRoomController@create')
//     ->name('classes.create-post');

Route::group(
    ['prefix' => 'admins', 'as' => 'admins.'],
    function () {
        Route::get('/', 'AdminController@index')->name('list');
        Route::get('class', 'AdminController@indexClass')->name('class');
        Route::get('login', 'AdminController@getLogin')->name('getLogin');
        Route::post('post-login', 'AdminController@postLogin')->name('postLogin');
        Route::get('logout', 'AdminController@logout')->name('logout');
        Route::get('register', 'AdminController@getRegister')->name('getRegister');
        Route::get('post-register', 'AdminController@postRegister')->name('postRegister');
    }
);

Route::get('input', 'SumController@sumView')->name('sum-view');
Route::post('sum', 'SumController@sum')->name('sum');

// Route::get('/admins', function () {
//     return view('admins');
// });

Route::get('/users', function () {
    return view('users');
});

Route::get('/admin_temp', function () {
    return view('admin.master');
});
