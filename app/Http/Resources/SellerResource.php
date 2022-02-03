<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SellerResource extends JsonResource
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
            'id' => $this->id,
            'segment_id' => $this->segment_id,
            'name' => $this->name,
            'location' => $this->location,
            'validity' => $this->validity,
            'links' => [
                'self' => route('sellers.show', [$this->segment_id, $this->id]),
                'offers' => route('offers.index', [$this->id])
            ]
        ];
    }
}
