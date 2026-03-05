<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = "doctors";
    protected $fillable = ['name','title','gender','hosiptal_id','created_at'];
    protected $hidden = ['created_at'];
    public $timestamps = true;

    public function hospital()
    {
        return $this->belongsTo('App\Models\Hospital','hosiptal_id','id');
    }
}
