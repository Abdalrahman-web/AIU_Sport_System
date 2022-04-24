<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Task extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
         return [
           'id' => $this->id ,
           'play_ground'=>$this->play_ground,
           'created_at' => $this->created_at->format('d/m/Y'),
           'booking_status'=>$this->booking_status
         ];
    }
}
