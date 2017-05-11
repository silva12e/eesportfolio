<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('project_id', 250)->unique;
            $table->string('project_title');
            $table->string('project_date');
            $table->string('project_role');
            $table->string('project_tools');
            $table->string('project_description');
            $table->string('project_isDone');
            $table->text('project_github_link');
            $table->string('slug');
            $table->string('avatar');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
