<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactFormClients extends Model
{    
	public $table = 'contact_information_clients';
	public $fillable = ['name','email','phone', 'bestContactMethod',
	 'howDidYouHeadAboutMe', 'comments'];
}
