<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
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
            'seller_id' => $this->seller_id,
            'name' => $this->name,
            'image' => $this->image,
            'type' => $this->type,
            'detail' => $this->detail,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'links' => [
                'self' => route('offers.show', [$this->seller_id, $this->id])
            ]
        ];
    }
}
