<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Owner User',
            'email' => 'owner@owner.com',
            'password' => 'password',
            'role' => 'owner',
        ]);

        User::factory()->create([
            'name' => 'Regular User',
            'email' => 'user@user.com',
            'password' => 'password',
            'role' => 'user',
        ]);

        $this->call(InstalacionesSeeder::class);
    }
}
