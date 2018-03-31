<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
	protected $fillable = [
        'word','hint'
    ];
	public function getHintAttribute($hint){
		return ucwords($hint);
	}
}
