<?php

//Pages Route
Route::get('/', 'PagesController@index');
Route::get('/about-me', 'PagesController@getAboutMe');
Route::get('/contact-information', 'PagesController@getSampleProjects');
//Route::get('/sample-projects', 'PagesController@getSampleProjects');


//Quotes Form Routes
Route::post('/contactMe', ['as'=>'contactMe.store','uses'=>'QuotesClientsController@store']);

//Contact Form Routes
Route::get('/contact-information', 'ContactFormClientsController@create');
Route::post('/contact-information', ['as'=>'contactInformation.store','uses'=>'ContactFormClientsController@store']);

 //Projects Routes
 Route::get('/sample-projects', 'ProjectsController@index');
 Route::get('/sample-projects/create', 'ProjectsController@create');
 Route::post('/sample-projects', 'ProjectsController@store');
 Route::get('/sample-projects/{project}', 'ProjectsController@show');
 Route::get('/sample-projects/{project}/edit', 'ProjectsController@edit');
 Route::put('/sample-projects/{project}', 'ProjectsController@update');
 Route::delete('/sample-projects/{project}', 'ProjectsController@destroy');
 


//Authentication Routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/eesportfolio-admin', 'AdminController@index');


