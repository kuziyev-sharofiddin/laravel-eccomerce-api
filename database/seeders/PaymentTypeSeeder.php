<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentType;
class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentType::create([
            'name' => [
                'uz' => 'Naxt',
                'ru' => 'ru Naxt'
            ]
            ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Terminal',
                'ru' => 'ru Terminal'
            ]
            ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Click',
                'ru' => 'ru Click'
            ]
            ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Payme',
                'ru' => 'ru Payme'
            ]
            ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Uzum',
                'ru' => 'ru Uzum'
            ]
            ]);
    }
}
