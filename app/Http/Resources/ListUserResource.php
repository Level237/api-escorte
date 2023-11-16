<?php

namespace App\Http\Resources;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListUserResource extends JsonResource
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
            'username'=>$this->username,
            'email'=>$this->email,
            'phone_number'=>$this->phone_number,
            'suspended_at'=>$this->suspended_at,
            'role'=>Role::where('id',$this->role_id)->get('role_name')->first(),
        ];
    }
}
