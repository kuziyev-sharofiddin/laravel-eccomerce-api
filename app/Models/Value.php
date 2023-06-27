<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attribute;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Value extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['attribute_id','product_id','name'];
    public array $translatable = ["name"];

    public function attribute(): BelongsTo
    {
        return $this->belongsTo(Áttribute::class);
    }
}
