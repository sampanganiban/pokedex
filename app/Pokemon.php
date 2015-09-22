<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
   	// Allow the model to see the correct table name in the database
   	public $table = 'pokemon';

   	// By defaut laravel inserts timestamps into the database, this will ensure that timestamps won't be used
   	public $timestamps = false;
}
