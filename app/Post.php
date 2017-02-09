<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function user(){
		return $this->belongsTo('App\User', 'id_user');
	}

	protected $fillable = [
		'titulo', 'texto', 'id_user'
	];
}
