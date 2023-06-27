<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Stock;
use Spatie\Translatable\HasTranslations;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;
    protected $fillable = ['category_id','name','description', 'price'];

    public array $translatable = ["name",'description'];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }

    public function users(): BelongsToMany
    {
        return $this->BelongsToMany(User::class);
    }
}
