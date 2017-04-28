<?php

Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('/about-me', function()
{
    return View::make('pages.about-me');
});

Route::get('/contact-information', function()
{
    return View::make('pages.contact-information');
});

Route::get('/sample-projects', function()
{
    return View::make('pages.projects');
});

Route::get('/services', function()
{
    return View::make('pages.services');
});




