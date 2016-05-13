<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class knowledge extends Model
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

    $Knowledges = contributor::lists('firstName','lastName','id');
}
