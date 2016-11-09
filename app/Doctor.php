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
    protected $fillable=['firstName','email','middleName','lastName','phoneNo','contact','facebook','twitter','skype','education','workDays','speciality'];


    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("firstName", "LIKE","%$keyword%")
                    ->orWhere("middleName", "LIKE", "%$keyword%")
                    ->orWhere("lastName", "LIKE", "%$keyword%")
                    ->orWhere("about", "LIKE", "%$keyword%")
                    ->orWhere("education", "LIKE", "%$keyword%")
                    ->orWhere("facebook", "LIKE", "%$keyword%")
                    ->orWhere("twitter", "LIKE", "%$keyword%")
                    ->orWhere("skype", "LIKE", "%$keyword%");


            });
        }
        return $query;
    }






} //end of doctor class


