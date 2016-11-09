<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    //
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    protected $fillable=['complain','followUp','doctorAdvice','followUpDate','referTo','patient_id','visitDate','doctorId'];

}
