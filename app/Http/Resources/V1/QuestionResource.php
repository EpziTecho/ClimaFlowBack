<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'question' => $this->question,
            'answer'=>$this->answer,
            'valoration'=>$this->valoration,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    

    }
}