<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SpecializationResource extends JsonResource
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
            'الرقم' => $this->id,
            'اسم التخصص' => $this->title,
            'الاسم التفصيلي لتخصص' => $this->body
        ];
        // return parent::toArray($request);
    }
}
