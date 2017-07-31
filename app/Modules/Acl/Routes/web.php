<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();


Route::group(['middleware' => 'auth'], function () {

    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');


    Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {

        Route::group(['prefix' => 'users'], function () {
            Route::get('/', 'UserController@index');
            Route::post('add', 'UserController@add');
            Route::get('{uid}', 'UserController@show');
            Route::post('{uid}/update', 'UserController@update');
            Route::post('{uid}/delete', 'UserController@delete');
            //post
            Route::get('{uid}/property/{name}/change', 'UserController@changeProperty');
            Route::get('{uid}/roles/{rid}/detach', 'UserController@detachRole');
            Route::get('{uid}/roles/{rid}/attach', 'UserController@attachRole');
            Route::get('{uid}/perissions/{pid}/detach', 'UserController@detachPremission');
            Route::get('{uid}/permissions/{pid}/attach', 'UserController@attachPremission');
        });

        Route::group(['prefix' => 'roles'], function () {
            Route::get('/', 'RoleController@index');
            Route::post('add', 'RoleController@add');
            Route::post('{rid}/update', 'RoleController@update');
            Route::post('{rid}/delete', 'RoleController@delete');
            //post
            Route::get('{rid}/perissions/{pid}/detach', 'RoleController@detachPremission');
            Route::get('{rid}/permissions/{pid}/attach', 'RoleController@attachPremission');
        });

        Route::group(['prefix' => 'permissions'], function () {
            Route::get('/', 'PermissionsController@index');
            Route::post('add', 'PermissionsController@add');
            Route::post('{pid}/update', 'PermissionsController@update');
            Route::post('{pid}/delete', 'PermissionsController@delete');
        });

    });
});






