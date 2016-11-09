<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitCount extends Model
{
    public function year()
    {
        return $this->belongsTo('App\Year');
    }
    protected $fillable=['year_id','January','February','March','April','May','June','July','August','September', 'October', 'November', 'December'];
}
