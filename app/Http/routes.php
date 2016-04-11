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

//test article date route This is test,when this cms is ok,it's can be delete
Route::get('articlestore','ArticlesController@store');
Route::get('articlesshow/{id}','ArticlesController@show');
Route::get('articlesindex/{id}','ArticlesController@index');
Route::get('rediscachetest','CacheController@index');
Route::get('exception','ArticlesController@create');
Route::get('paginate/{id}','ArticlesController@paginate');
//test Ajax technology
Route::get('nextpage','ArticlesController@nextpage');
Route::get('jsonknowledge','ArticlesController@json');
//Normal user route

//Bootstrap test
Route::get('bootstrap',function ()
{
        return view('bootstraptest');
});
Route::get('bootstrap0',function ()
{
        return view('bootstraptest0');
});
Route::get('bootstrap1',function()
{
        return view('bootstraptest1');
});
Route::get('bootstrap2',function()
{
        return view('bootstraptest2');
});
Route::get('bootstrap3',function ()
{
    return view('bootstrap3test');
});
Route::get('bootstrapsnippet',function ()
{
    return view('bootstrapsnippet');

});
Route::get('bootstrapshow',function()
{
    return view('bootstrapshow');
});











//
Route::get('/', function () 
{
    return view('index');
});
Route::get('blog', function () 
{
    return view('blog');
});
Route::get('iscroll', function () 
{
    return view('iscroll');
});
Route::get('landing', function () 
{
    return view('landing');
});
Route::get('login', function () 
{
    return view('login');
});
Route::get('non-responsive', function () 
{
    return view('non-responsive');
});
Route::get('sidebar', function () 
{
    return view('sidebar');
});
Route::get('widgetbasic', function () 
{
    return view('widgetbasic');
});
Route::get('widget', function () 
{
    return view('widget');
});Route::get('welcome', function () 
{
    return view('welcome');
});






//Admin route

Route::get('admin-index',function ()
{
	return view('admin.admin-index-fixed');
});
Route::get('admin-help',function ()
{
	return view('admin.admin-help');
});
Route::get('admin-404',function ()
{
	return view('admin.admin-404');
});
Route::get('admin-form', function () 
{
    return view('admin.admin-form');
});
Route::get('admin-log', function () 
{
    return view('admin.admin-log');
});
Route::get('admin-table', function () 
{
    return view('admin.admin-table');
});
Route::get('admin-user', function () 
{
    return view('admin.admin-user');
});
Route::get('admin-gallery', function () 
{
    return view('admin.admin-gallery');
});
Route::get('admin-index-fixed', function () 
{
    return view('admin.admin-index-fixed');
});


// use blade model show view
Route::get('Admin-index-fixed',function ()
{
    return view('admin.Admin-index-fixed');
});