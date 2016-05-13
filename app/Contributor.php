<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
  
 		

 		protected $fillable = ['firstName',
                        'lastName',
                        'email'];
}
