<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hosiptal extends Model
{
    protected $table = "hosiptal";

    protected $fillable = [
        'name',
        'address',
        'country_id'
    ];

    protected $hidden = ['created_at'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'hosiptal_id', 'id');
    }
}
