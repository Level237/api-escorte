<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MyPurchaseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'payment'=>$this->payment,
            'membership_type'=>$this->membership,
            'announce'=>$this->announcement->id,
            'expire_at'=> Carbon::parse($this->expire_at)->format('d-m-Y H:i'),
            'status'=>$this->status
        ];
    }
}
