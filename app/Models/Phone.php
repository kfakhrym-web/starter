<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    protected $table = "phone";
    protected $fillable = ['code','mobile','user_id'];
    protected $hidden = ['user_id'];
    public $timestamps = false;

    ############# Start relations ############

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }


    ############# End relations ############
}
