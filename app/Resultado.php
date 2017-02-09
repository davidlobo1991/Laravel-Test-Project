<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
	public function user(){
		return $this->belongsTo('App\User', 'id_user');
	}

	public function partido(){
		return $this->belongsTo('App\Partido', 'id_partido');
	}

	protected $fillable = [
		'id_user', 'id_partido', 'goles_local', 'goles_visitante'
	];

}
