@extends('layouts.master')
  @section('content')
 <div class="container"  id="project_container">
    <div class="row">
    <p style="margin-left: 20px;"><a href="{{url('/sample-projects')}}">Projects</a></p>
        <div class="col-md-12">
           <h1 class="text-center projectTitle">{{ $project->project_title }}</h1>
           <hr>
        </div>
    </div>
    <div class="row" style="margin-top:11px;">
       
        <div class="col-md-6">   
            <img class="projectImg img-responsive" src="/{{$project->avatar}}" alt = "okstaff" />
        </div>
      
          <div class="col-md-6">
            <ul class="project_body">
              <li><strong>Role: </strong>{{ $project->project_role}}</li>
              <li><strong>Date: </strong>{{ $project->project_date }}</li>
              <li><strong>tools: </strong>{{ $project->project_tools }}</li>
              <li><strong>Description: </strong>{{ $project->project_description }}</li>
              <li><strong>Status: </strong>{{ $project->project_isDone }}</li>
              <li><strong>Github Link: </strong>{{ $project->project_github_link }}</li>
            </ul>  
        </div>
    </div>
</div>
 @stop
   

