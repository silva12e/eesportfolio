<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesClientsTable extends Migration
{

    public function up()
    {
        Schema::create('quotes_clients', function (Blueprint $table)
         {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('comments');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quotes_clients');
    }
}
