<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
	public function resultado() {
		return $this->hasMany('Resultado');
	}
}
