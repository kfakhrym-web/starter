<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = "doctors";
    protected $fillable = ['name','title','gender','hosiptal_id','medical_id','created_at'];
    protected $hidden = ['created_at','pivot'];
    public $timestamps = true;

    public function hospital()
    {
        return $this->belongsTo('App\Models\Hosiptal','hosiptal_id','id');
    }

    public function services(){
       return $this->belongsToMany(
           'App\Models\Service',
           'doctor_service',
           'doctor_id',
           'service_id',
           'id');
    }
}
