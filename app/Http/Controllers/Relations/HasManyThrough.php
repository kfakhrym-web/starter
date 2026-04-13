<?php

namespace App\Http\Controllers\Relations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class HasManyThrough extends Controller
{
    public function getCountryDoctors(){
        $country = Country::with('doctors')->find(1);

         if (!$country) {
        return response()->json([
            'status' => false,
            'message' => 'Country not found'
        ], 404);
    }

    return response()->json([
        'status' => true,
        'country' => $country->name,
        'hospitals' => $country->hosiptals,
        'doctors' => $country->doctors
    ]);

     }
}
