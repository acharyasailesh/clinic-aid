<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //

    protected  $table='patients';
    protected  $primaryKey="id";
    protected $fillable=['firstName','middleName','lastName','gender','bloodGroup','DOB','address','contact','about','email','followUp','doctor_id','password'];

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function medicalHistory()
    {
        return $this->hasMany('App\MedicalHistory');
    }



    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("firstName", "LIKE","%$keyword%")
                    ->orWhere("middleName", "LIKE", "%$keyword%")
                    ->orWhere("lastName", "LIKE", "%$keyword%")
                    ->orWhere("email", "LIKE", "%$keyword%")
                    ->orWhere("bloodGroup", "LIKE", "%$keyword%")
                    ->orWhere("contact", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }

    public function pPhoto()
    {
        return $this->hasOne('App\PPhoto');
    }




}
