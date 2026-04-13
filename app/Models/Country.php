<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "counteries";
    protected $fillable = ['name'];
    public $timestamps = false;


    public function doctors(){
        return $this->hasManyThrough('App\Models\Doctor','App\Models\Hosiptal','country_id','hosiptal_id','id','id');
    }

    public function hosiptals(){
        return $this->hasMany('App\Models\Hosiptal','country_id','id');
    }

}

