<?php

//Route:: get('/','PublicController@index')->name('home');
Route:: get('/','FrontController@index')->name('home');
Route:: get('/public','PostManageController@index')->name('all');

//admin route
Route:: get('/admin/login','AdminLoginController@index')->name('admin.signin');
Route:: post('/admin/login','AdminLoginController@login')->name('admin.signin');
Route:: get('/admin/logout','AdminLoginController@logout')->name('admin.logout');
Route:: get('/admin/dashboard','AdminLoginController@dashboard')->name('admin.dashboard');
//Route:: get('/admin/posts','AdminLoginController@posts');
//Route:: post('/admin/posts','AdminLoginController@addpost');
//Route:: get('/admin/showposts','AdminLoginController@showPost');


//user route
Route:: get('/login','UserLoginController@index')->name('user.login');
Route:: post('/login','UserLoginController@login')->name('user.login');
Route:: get('/logout','UserLoginController@logout')->name('user.logout');


//register route
Route:: get('/user','UserRegisterController@index');
Route:: post('/user','UserRegisterController@register')->name('user.register');

Route:: get('/posts','UserPostController@index')->name('user.post.show');





Route:: group(['middleware'=>'chkUser'],function() {

    Route:: get('/dashboard', 'UserManageController@index')->name('user.show');
    Route:: get('/user/{id}/edit', 'UserManageController@edit')->name('user.edit');
    Route:: post('/user/{id}/update', 'UserManageController@update')->name('user.update');
    Route:: get('/user/{id}/delete', 'UserManageController@delete')->name('user.delete');
    Route:: get('/posts','UserPostController@index')->name('user.post.show');
    Route:: post('/posts','UserPostController@post')->name('user.post');
    Route:: get('/posts/genarate','UserPostController@showPost')->name('user.showPost');

});

//Route:: group(['middleware'=>'chkUser'],function() {

//    Route:: get('/dashboard', 'AdminManageController@index')->name('admin.show');
//    Route:: get('/user/{id}/edit', 'UserManageController@edit')->name('user.edit');
//    Route:: post('/user/{id}/update', 'UserManageController@update')->name('user.update');
//    Route:: get('/user/{id}/delete', 'UserManageController@delete')->name('user.delete');
//    Route:: get('/posts','UserPostController@index')->name('user.post.show');
//    Route:: post('/posts','UserPostController@Post')->name('user.post');

//});
