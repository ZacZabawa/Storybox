<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class tekpoint extends Model
{
     
	

      /**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'tradPlaceName',
        'description',
        'y',
        'x',
        'name',
        'icon',
        'zid',
        'elev'
    ];

    

      public function user() {
        return $this->belongsTo('app\user'); // this matches the Eloquent model
    }

      public function session() {
        return $this->belongsTo('app\session'); // this matches the Eloquent model
    }

    // each bear climbs many trees
    public function contributors() {
        return $this->belongsToMany('App\contributor');
    }


    
}
