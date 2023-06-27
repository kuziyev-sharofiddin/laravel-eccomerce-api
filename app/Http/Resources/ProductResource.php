<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Resources\StockResource;
use App\Http\Resources\CategoryResource;
use App\Models\Category;


class ProductResource extends JsonResource
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
            'name' => $this->getTranslations("name"),
            'price' => $this->price,
            'description' => $this->getTranslations("description"),
            // 'category' => CategoryResource::collection($this->category),
            'category' => new CategoryResource($this->category),
            'inventory' => StockResource::collection($this->stocks),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
