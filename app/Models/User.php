<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserAddress;
use App\Models\Order;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
// use Illuminate\Database\Eloquent\BelongsToMany;

use App\Models\Role;
use App\Models\Product;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roles(): BelongsToMany
    {
        return $this->BelongsToMany(Role::class);
    }

    public function favorites(): BelongsToMany
    {
        return $this->BelongsToMany(Product::class);
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(UserAddress::class);
    }


    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function hasFavorite($favorite_id): bool
    {
        return $this->favorites()->where('product_id',  $favorite_id)->exists();
    }
}
