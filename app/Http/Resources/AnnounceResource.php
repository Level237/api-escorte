<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnnounceResource extends JsonResource
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
            'user' => $this->user,
            'category' => $this->category,
            'town' => $this->user->Escort[0]->quarter->town,
            'quarter' => $this->user->Escort[0]->quarter,
            'ethnie' => $this->user->Escort[0]->ethnic,
            'type' => $this->type,
            'title' => $this->title,
            'description' => $this->description,
            'accepted' => $this->accepted,
            'location' => $this->location
        ];
    }
}
