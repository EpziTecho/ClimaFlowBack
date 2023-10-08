<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'player_id' => $this->player_id,
            'scrap_amount' => $this->scrap_amount,
            'water_amount' => $this->water_amount,
            'water_container_amount' => $this->water_container_amount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ]   ;
    }
}