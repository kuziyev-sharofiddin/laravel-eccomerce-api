<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Value;

class ValueSeeder extends Seeder
{

    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
               'uz' => 'Qizil',
               'ru' => 'Красный'
            ],
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
               'uz' => 'Qora',
               'ru' => 'Черный'
            ],
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
               'uz' => 'Jigarrang',
               'ru' => 'Коричневый'
            ],
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
               'uz' => 'MDF',
               'ru' => 'МДФ'
            ],
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
               'uz' => 'LDSP',
               'ru' => 'ЛДСП'
            ],
        ]);
    }
}
