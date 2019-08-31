<?php

Route:: get('/user','UserRegisterController@index');
Route:: post('/user','UserRegisterController@register')->name('user.register');

Route:: get('/dashboard','UserManageController@index')->name('user.show');
Route:: get('/user/{id}/edit','UserManageController@edit')->name('user.edit');

Route:: post('/user/{id}/update','UserManageController@update')->name('user.update');
Route:: get('/user/{id}/delete','UserManageController@delete')->name('user.delete');

