<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //

    protected  $table='patients';
    protected  $primaryKey="id";


    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function medicalHistory()
    {
        return $this->hasMany('App\MedicalHistory');
    }

}
