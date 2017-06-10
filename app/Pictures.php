<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    public function pictures() {

    	return $this->belongsTo(News::class);

    }
}
