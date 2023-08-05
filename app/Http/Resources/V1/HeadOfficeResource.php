<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HeadOfficeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       // return parent::toArray($request);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'address'=>$this->address,
            'opening_date'=>$this->opening_date,
            'status'=>$this->status,
            'description'=>$this->description
        ];

    }
}
