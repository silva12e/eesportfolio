<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInformationClients extends Migration
{
   
    public function up()
    {
        Schema::create('contact_information_clients', function (Blueprint $table)
        {
           $table->increments('id');
           $table->string('name');
           $table->string('email');
           $table->string('phone');
           $table->string('bestContactMethod');
           $table->string('howDidYouHeadAboutMe');
           $table->string('comments');
           $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('contact_information_clients');
    }
}
