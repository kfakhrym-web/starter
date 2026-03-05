<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = "hosiptal";
    protected $fillable = ['id','name','address','created_at'];
    protected $hidden = ['created_at'];
    public $timestamps = true;

    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor','hosiptal_id','id');
    }
}
