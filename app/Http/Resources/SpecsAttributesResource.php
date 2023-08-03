<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecsAttributesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'model_id' => $this->model_id,
            'circuit_type' => $this->circuit_type,
            'unit' => $this->unit,
            'cover_style' => $this->cover_style,
            'cell_type' => $this->cell_type,
            'force_unit' => $this->force_unit,
            'ot_type' => $this->ot_type,
        ];
    }
}
