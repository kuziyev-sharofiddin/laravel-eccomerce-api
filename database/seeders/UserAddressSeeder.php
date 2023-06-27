<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserAddressSeeder extends Seeder
{
    public function run(): void
    {
        User::find(2)->addresses()->create([
            'latitude' => '31.2324333',
            'longitude' => '49.2344322',
            'region' => 'Tashkent',
            'district' => 'Mirabad district',
            'street' => 'Algoritm mahalla',
            'home' => '444444',

        ]);
        User::find(2)->addresses()->create([
            'latitude' => '31.2324333',
            'longitude' => '49.2344322',
            'region' => 'Tashkent',
            'district' => 'Mirabad district',
            'street' => 'Algoritm mahalla',
            'home' => '222222222',

        ]);
    }
}
