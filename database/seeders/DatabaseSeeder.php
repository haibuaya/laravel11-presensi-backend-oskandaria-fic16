<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'oskandaria',
            'email' => 'oskandaria@haibuaya.inc',
            'password' => Hash::make('12345678'),
            'phone' => '082153534343',
            'role' => 'user'
        ]);
    }
}
