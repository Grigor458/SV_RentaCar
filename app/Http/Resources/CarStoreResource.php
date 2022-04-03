<?php

namespace App\Http\Resources;

use App\Models\Car;
use Illuminate\Http\Resources\Json\JsonResource;

class CarStoreResource extends JsonResource
{
    /** @var Car */
    public $resource;
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
//        return parent::toArray($request);
        return [
            'id' => $this->resource->getKey(),
            'name' => $this->resource->name,
            'created_at' => $this->resource->created_at->toDateTimeString()
        ];

    }
}
