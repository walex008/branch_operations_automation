<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AreaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//        return parent::toArray($request);
        return [
            'head_office_id'=> $this->head_office_id,
            'zone_id' => $this->zone_id,
            'name' => $this->name,
            'opening_date' =>$this->opening_date,
            'description' =>$this->description,
            'status' => $this->status,
            'is_system' => $this->is_system
        ];
    }
}
