<?php

namespace App\Http\Controllers\Relations;

use App\Http\Controllers\Controller;
use App\Models\phone;
use App\User;

class HasOneController extends Controller
{
    public function hasOneRelation()
    {
        $user = User::with(['phone' => function ($q) {
            $q->select('code','mobile','user_id');
        }])->Find(6);
        // $phone = $user -> phone
        return response()->json($user);
    }

    public function hasOneRelationReverse(){
         $phone = Phone::with(['user' => function ($q) {
             $q->select('id','name','age');
         }])->Find(1);
        $phone -> makeVisible(['user_id']);
        //$phone -> makeHidden(['code']);
       return $phone;
       // return $phone ->user; // return all data to user according to phone
    }

    public function UserHasPhone()
    {
       $users = User::whereHas('phone',function ($q){
           $q->where('code','20');
       })->get();
       return response()->json($users);
    }

    public function UserNotHasPhone()
    {
        $users = User::whereDoesntHave('phone')->get();
        return response()->json($users);
    }

    public function UserHasPhoneWithCondition()
    {
        $users = User::whereHas('phone',function ($q){
            $q->where('code','20');
        })->get();
        return response()->json($users);
    }

}
