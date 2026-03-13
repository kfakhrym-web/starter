<?php

namespace App\Http\Controllers\Relations;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Http\Request;

class ManyToMany extends Controller
{
    public function getDoctorServices(){
        $doctor = Doctor::with('services')->Find(3);
        return $doctor;
    }

    public function getServiceDoctors(){
         $doctors = Service::with(['doctors' => function ($query) {
             $query->select('doctors.id','doctors.name','doctors.title');
         }])->find(1);
         // other method ($doctors->doctors->makeHidden('gender','hosiptal_id'))
         return $doctors;
    }

    public function getDoctorOperations($doctor_id)
    {
        $doctor = Doctor::Find($doctor_id);
        $operations = $doctor->services;
        $doctors = Doctor::select('doctors.id','doctors.name')->get();
        $services = Service::select('services.id','services.name')->get();
        return view('doctors.operations', compact('operations','doctors','services'));
    }

    public function saveServicesForDoctors(Request $request)
    {
        $doctor = Doctor::find($request -> doctor_id);
        if(!$doctor)
            return abort(404);
       // $doctor -> services() -> attach($request -> service_id); // many to many insert to database  // attach repeat services
       // $doctor -> services() -> sync($request -> service_id);  // sync() => update (remove the old services and add new services)
        $doctor -> services() -> syncWithoutDetaching($request ->service_id); // syncWithoutDetaching() => add new services without remove the old services
        return 'success';
    }
}
