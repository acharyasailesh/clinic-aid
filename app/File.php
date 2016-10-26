<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
	protected $fillable=['news_id'];
	protected $primaryKey='id';
    //
    public function news(){
    	$this->belongsTo('App\News');
    }
}
