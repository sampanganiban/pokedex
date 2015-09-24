<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capture extends Model
{
    
	// a capture belongs to a single pokemon
	public function pokemon() {
		return $this->belongsTo( 'App\Pokemon' );
	}

	// a pokemon belongs to a single user
	public function user() {
		return $this->belongsTo( 'App\User' );
	}

}
