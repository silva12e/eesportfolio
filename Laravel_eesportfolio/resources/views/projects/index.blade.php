@extends('layouts.master')
@section('content')
<div class="projects-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Sample Projects</h2>
            <p class="text-center">I've had the privilege to work with very skilled individuals in a number of projects. These are just some of my favorite ones...</p>
        </div>
        <div class="row projects">
            <div class="col-lg-4 col-sm-6 item"><img id="okstaff" src="{{URL::asset('img/okstaff_logo.png')}}"  />
                <a href="{{url('/sample-projects/okanagan-staffing-services')}}"><h3 class="name">Oknagan Staffing: Online Application System</h3></a>
                <p class="description">This project was a Capstone project for my Computer Science Program in college. My Role in the development team was as a backend developer using PHP based frameworks.</p>
            </div>
            <div class="col-lg-4 col-sm-6 item"><img id="nextstep" src="{{URL::asset('img/nextStep_logo.png')}}"  />
               <a href="{{url('/sample-projects/next-step-kelowna')}}"> <h3 class="name">Next Step Kelowna: Official Website</h3></a>
                <p class="description">This project was for the amazing over at Next Step transitional housing. My role for this project was a Full Stack Developer. I am particularly proud of this project because I handled all the coding on my own.</p>
            </div>
            <div class="col-lg-4 col-sm-6 item"><img id="islanders" class=" img-circle" src="{{URL::asset('img/islanders_logo.jpg')}}" />
               <a href="{{url('/sample-projects/islander-music')}}"> <h3 class="name">Islander Music</h3></a>
                <p class="description">The islanders are a band based out of Vancouver, BC. Ina very short time this band has become very popular and even published in one of Toronto's famous Music magazines.My role in this project serves as a full stack developer. This project is currently being completed.</p>
            </div>
        </div>
    </div>
</div>
@stop