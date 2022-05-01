<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HighlightsResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'number_price' => $this->price,
            'formatted_price' => 'R$ '.number_format($this->price, 2, ',', '.'),
            'highlights' => $this->highlights,
            'voltage' => $this->voltage,
            'brand' => $this->brand,
            'image' => $this->image
        ];
    }
}
