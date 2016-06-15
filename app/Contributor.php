<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contributor extends Model
{
  
 		

protected $fillable = ['firstName',
                        'lastName',
                        'phone',
                        'email',
                        'community'];

  public function tekpoints()
    {
        return $this->belongsToMany('app\tekpoint');
    }

      public function media()
    {
        return $this->belongsToMany('app\media');
    }

}

 