<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeliveryMethod;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tekin',
                'ru' => 'ru Tekin',
            ],
            'estimated_time' => [
                'uz' => '5 kun',
                'ru' => 'ru 5 kun'
            ],
            'sum' => 0,
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Standart',
                'ru' => 'ru Standart',
            ],
            'estimated_time' => [
                'uz' => '3 kun',
                'ru' => 'ru 3 kun'
            ],
            'sum' => 40000,
        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Tez',
                'ru' => 'ru Tez',
            ],
            'estimated_time' => [
                'uz' => '1 kun',
                'ru' => 'ru 1 kun'
            ],
            'sum' => 80000,
        ]);
    }
}
