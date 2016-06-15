<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    protected $fillable = ['name', 'dateTime' , 'description'

    ];

    public function tekpoints()
    {
        return $this->hasMany('app/tekpoint');
    }

      public function media()
    {
        return $this->hasMany('app/media');
    }}
