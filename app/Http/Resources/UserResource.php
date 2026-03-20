<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return [
        'user_id'    => $this->id,
        'full_name'  => $this->name,
        'user_email' => $this->email, 
        'user_phone' => $this->phone,
        'user_image' => $this->image ? url('storage/' . $this->image) : null,
        'joined_at'  => $this->created_at->format('Y-m-d'),
    ];
    }
}
