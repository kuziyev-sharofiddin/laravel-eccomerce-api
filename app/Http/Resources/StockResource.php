<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Attribute;
use App\Models\Value;

class StockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $result = [
            'quantity' => $this->quantity,
        ];


        return $this->getAttributes($result);

    }

    public function getAttributes(array $result): array
    {
        $result = [
            'stock_id' => $this->id,
            'quantity' => $this->quantity,
        ];

        $attributes = json_decode($this->attributes);
        foreach ($attributes as $stockAtrribute){
            $attribute = Attribute::find($stockAtrribute->attribute_id);
            $value = Value::find($stockAtrribute->value_id);

            $result[$attribute->name] = $value->getTranslations('name');

        }

        return $result;
    }
}
