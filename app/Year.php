<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function visitCount()
    {
        return $this->hasMany('App\VisitCount');
    }
}
