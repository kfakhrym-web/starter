<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $table = "medicals";
    protected $fillable = ['pdf','medical_id'];
    protected $hidden = 'medical_id';
    public $timestamps = false;

}
