<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('Admin123'),
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Usuario',
            'email' => 'usuario@test.com',
            'password' => bcrypt('Usuario123'),
            'role' => 'user',
        ]);
    }
}
