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
        'geometry',
        'currentPlaceName'
    ];

   

}
