<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','firstName'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function hasAnyRole($roles)

    {
        if(is_array($roles)){
            foreach ($roles as $role){
                if($this->hasRole($role))
                    return true;
            }
        }
        else{

            if($this->hasRole($roles))
                return true;
        }

        return false;
    }  //end of hasAnyRole

    public function hasRole($role)

    {
        if($this->roles()->where('name',$role)->first()) return true;
       return false;
    }


}
