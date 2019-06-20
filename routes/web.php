<?php
Route::get('/', function () {
  //  return view('welcome');
  return 'home';
});

Route::get('/usuarios','UserController@index');

Route::get('/usuarios/{id}','UserController@show')
->where('id','[0-9]+');

Route::get('/usuarios/nuevo','UserController@nuevo'
    
);

Route::get('/saludo/{nombre}/{nickname?}','WelcomeUserController');
