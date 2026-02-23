<?php
namespace App\Traits;
Trait OfferTrait
{
     function saveImages($photo , $folder){
        //save photo in folder
        $file_extention = $photo -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extention;  // 443264632.jpg
        $path = $folder;
        $photo -> move($path,$file_name);
        return $file_name;
    }


}
