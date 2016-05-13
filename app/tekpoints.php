<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Phaza\LaravelPostgis\Geometries\Point;

class tekpoint extends Model
{
     
	use PostgisTrait;

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

    protected $postgisFields = [
        Point::class,
        Polygon::class,
    ];

}
