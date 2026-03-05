<?php

namespace App\Http\Controllers\Relations;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Hospital;

class HasManyController extends Controller
{
    public function getHospitalDoctors()
    {
      $hosiptal =  Hospital::with('doctors')->Find(1);   // Hosiptal::where('id',1)->First();  // Hosiptal::First();
       $doctors =  $hosiptal -> doctors;  // return the doctors in hosiptal
        foreach ($doctors as $doctor) {
            echo $doctor ->name.'<br>' ;
        }
        $doctor = Doctor::with('hospital')->find(4);
        return $doctor->hospital->name;
    }

    public function hospitals()
    {
       $hospital =  Hospital::select('id','name','address')->get();
        return view('doctors.hosiptal',compact('hospital'));
    }

    public function doctors($hospital_id){
       $hospital =  Hospital::find($hospital_id);
       $doctors = $hospital -> doctors;
       return view('doctors.doctors',compact('doctors'));

    }

    public function hospitalsHasDoctors(){
        $hospital =  Hospital::with('doctors')->whereHas('doctors')->get();
        return $hospital;
    }

    public function hospitalsNotHasDoctors(){
        $hospital =  Hospital::whereDoesntHave('doctors')->get();
        return $hospital;
    }

    public function hospitalsHasDoctorsMale()
    {
       return $hospital =  Hospital::with('doctors')->whereHas('doctors',function ($q){
            $q->where('gender','famale');
        })->get();
    }
}
