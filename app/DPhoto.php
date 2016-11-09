<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DPhoto extends Model
{
    //
    protected  $table='d_photos';
    protected  $fillable=['path','name','doctor_id'];
    public function doctor()
    {
        $this->belongsTo('App\Doctor');
    }
}
