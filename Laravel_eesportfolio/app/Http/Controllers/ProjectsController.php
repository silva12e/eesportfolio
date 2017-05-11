<?php
namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
class ProjectsController extends Controller
{
   
   public function index()
   {
   	return view('projects.index');
   }
 	
 	public function create()
 	{
 		return view('projects.create');
 	}

 	public function store(Request $request)
 	{
 		$this->validate($request, array
 			(
 				'project_title'=>'required',
 				'project_date'=>'required',
 				'project_description'=>'required',
 				'project_isDone'=>'required',
        'slug'=>'required'

 				));

 		//Store in Database
 		$project = new Project;
 	}

 	public function show($slug)
    {
      $projects = Project::where('slug', $slug)->firstOrFail(); 
      return view('projects.show', array('project' => $projects));
    }

 	
 	
}