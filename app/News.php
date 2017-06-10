<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{	
	protected $fillable = ['title', 'body'];
	
    public function pictures() {

    	return $this->hasMany(Pictures::class);
    	
    }
}
