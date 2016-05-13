<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class knowledgePoints extends Model
{
   // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('tradPlaceName','currentPlaceName','description','icon','firstHand','secondHand','contributor_id','session_id','media_id');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each bear HAS one fish to eat
    public function session() {
        return $this->hasOne('session'); // this matches the Eloquent model
    }

    // each bear climbs many trees
    public function contributor() {
        return $this->hasMany('contributor');
    }

     public function media() {
        return $this->hasMany('media');
    }
    // each bear BELONGS to many picnic
    // define our pivot table also
    // public function picnics() {
    //     return $this->belongsToMany('Picnic', 'bears_picnics', 'bear_id', 'picnic_id');
    // }

  }
