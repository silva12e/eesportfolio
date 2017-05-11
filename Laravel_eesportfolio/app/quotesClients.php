<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotesClients extends Model
{
    public $table = 'quotes_clients';
	public $fillable = ['name','email','comments'];
}
