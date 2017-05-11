<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'projects';
    protected $primaryKey = 'project_id';
	public $fillable = ['project_title','project_date','project_role','project_tools','project_description', 'project_isDone', 'project_github_link', 'slug', 'avatar'];
}
