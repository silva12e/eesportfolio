<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    
    public function index()
    {
       return view('pages.home');
    }
    
    public function getAboutMe()
    {
       return view('pages.about-me');
    }   

    public function getSampleProjects()
    {
       return view('pages.projects');
    }          
     
    public function getContactInformation()
    {
       return view('pages.contact-information');
    }          
}
