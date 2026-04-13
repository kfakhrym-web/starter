<?php

namespace App\Models;
use App\Scopes\OfferScopes;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = "offers";
    protected $fillable = ['price','created_at','updated_at','name_ar','name_en','details_ar','details_en','photo','status'];
    protected $hidden = ['created_at','updated_at'];
    //public $timestamps = false;

    ################### apply local scopes  ####################
    public function scopeInactive($query)
    {
       return $query->where('status',0);
    }

    public function scopeInvalid($query)
    {
       return $query->where('status',0)->whereNull('details_en');
    }

    #####################  apply global scopes #####################
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new OfferScopes);
    }
}
