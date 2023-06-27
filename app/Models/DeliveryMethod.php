<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;
use App\Models\Order;

class DeliveryMethod extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    protected $fillable =[
        'name',
        'estimated_time',
        'sum',
    ];

    public array $translatable = ["name", 'estimated_time'];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
