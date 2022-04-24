<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Players extends JsonResource
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
         'user_id'=>$this->id,
         'fullname'=>$this-> fullname,
         'password'=>$this-> password,
         'email' =>$this-> email,
         'image'=>$this-> image,
         'age'=>$this-> age,
         'height'=>$this-> height,
         'weight'=>$this-> weight,
         'diseases'=>$this ->diseases,
         'skill'=>$this -> skill,
         'teams'=>$this -> teams,
         'created_at' => $this->created_at->format('d/m/Y'),
        'updated_at' => $this->updated_at->format('d/m/Y'),





        ];
    }
}
