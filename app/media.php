<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    //  // MASS ASSIGNMENT -------------------------------------------------------
    // // define which attributes are mass assignable (for security)
    // // we only want these 3 attributes able to be filled
    protected $fillable = array('collection_name','name','model','file_name');


    public function tekpoints()
    {
        return $this->belongsToMany('app\tekpoint');
    }

       public function contributors() {
        return $this->belongsToMany('app\contributor');
    }
    // // LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
    // // since the plural of fish isnt what we named our database table we have to define it
    // protected $table = 'fish';

    // // DEFINE RELATIONSHIPS --------------------------------------------------
    // public function bear() {
    //     return $this->belongsTo('Bear');
}
