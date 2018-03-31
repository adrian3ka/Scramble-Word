<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamelog extends Model
{
    //
	protected $fillable = [ 
		'id_user',
		'action',
    ];
	public function user(){
		return $this->belongsTo('App\User','id_user');
	}
}
