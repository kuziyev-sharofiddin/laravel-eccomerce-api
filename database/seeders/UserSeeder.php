<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '998946908020',
            'password' => Hash::make('secret123'),
        ]);

        $admin->roles()->attach(1);


        $admin = User::create([
            'first_name' => 'Sharofiddin',
            'last_name' => 'Qoziyev',
            'email' => 'sharofiddin05@gmail.com',
            'phone' => '998940608020',
            'password' => Hash::make('secret123'),
        ]);

        $admin->roles()->attach(2);



        User::factory()->count(10)->hasAttached([Role::find(2)])->create();
    }
}
