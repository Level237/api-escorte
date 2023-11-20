<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberShipResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (string) $this->id,
            'membership_name' => $this->membership_name,
            'period' => $this->period,
            'price' => $this->price,
            'sexuality' => $this->sexuality,
            'age' => $this->age,
            'description' => $this->description,
            'photo' => $this->photo,
            'isVerified' => $this->isVerified,
            'quarter' => $this->quarter->quarter_name,
            'town' => $this->quarter->town->town_name,
            'shape' => $this->shape->shape_name,
            'ethnic' => $this->ethnic->ethnic_name,
            'height' => $this->height->height_name,
            'weight' => $this->weight->weight_name,
            'skin_color' => $this->skin_color->skin_color_name,
            'images' => $this->images
        ];
    }
}
