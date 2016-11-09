<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PPhoto extends Model
{
    //
    protected  $table='p_photos';
    protected  $fillable=['path','name','patient_id'];
    public function patient()
    {
        $this->belongsTo('App\Patient');
    }
}
