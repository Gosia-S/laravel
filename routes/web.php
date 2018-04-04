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

Route::get('/aboutOld', function () {
    return "<h1>Hello, we are learning Laravel.</h1><a href='contact'>go to contact page</a>";
});

Route::get('/contactOld', function () {
    return "<h1>Contact us</h1><a href='about'>go to about page</a>";
});

Route::get('/post{id}/{name}', function ($id, $name) {
    return "<h1>My post number is ".$id." and the name is ".$name."</h1>";
});

Route::get('admin/posts/example',array('as'=>'admin.home',function(){
    $url = route('admin.home');
    return 'This url is '.$url;
    }));

Route::get('/post', 'PostController@index');

Route::get('/vanarts', 'PostController@vanarts');

Route::get('/contact', 'PostController@contact');

Route::get('/about', 'PostController@about');

//curly bracket variables have to be separated by something - otherwise they will be read as one
Route::get('/vanarts{id}/{name}/{class}', 'PostController@vanarts');

Route::get('/about{restaurant}/{category}/{dish}', 'PostController@about');

Route::get('/gosia', 'PostController@gosia');

