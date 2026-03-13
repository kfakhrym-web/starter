<?php

namespace App\Http\Controllers\Relations;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class HasOneThrough extends Controller
{
    public function getPatientDoctors()
    {
        $patient = Patient::find(2);
        return $patient->doctor;
    }
}
