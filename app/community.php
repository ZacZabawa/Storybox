<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
 	protected $fillable = [
                      ];

    public function contributors() {
        return $this->hasMany('app\contributor');
    }

	public function users() {
        return $this->belongsToMany('app\user');
    }    

}
