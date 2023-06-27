<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => [
               'uz' => 'Stol',
               'ru' => 'Стол'
            ],
        ]);

        Category::create([
            'name' => [
               'uz' => 'Divan',
               'ru' => 'Диван'
            ],
        ]);

        Category::create([
            'name' => [
               'uz' => 'Kreslo',
               'ru' => 'Кресло'
            ],
        ]);

        Category::create([
            'name' => [
               'uz' => 'Yotoq',
               'ru' => 'Кровать'
            ],
        ]);

        Category::create([
            'name' => [
               'uz' => 'Stul',
               'ru' => 'Стул'
            ],
        ]);
    }
}
