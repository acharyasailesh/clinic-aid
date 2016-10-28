<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    public function dPhoto()
    {
        return $this->hasOne('App\DPhoto');
    }

    public function patients()
    {
        return $this->hasMany('App\Patient');
    }
    protected  $primaryKey='id';

}


