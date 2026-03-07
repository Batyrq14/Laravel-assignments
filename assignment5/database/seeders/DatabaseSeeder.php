<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User 1 - active account
        User::factory()->create([
            'name' => 'Active User',
            'email' => 'active@example.com',
            'account_status' => 'active',
        ]);

        // User 2 - inactive account
        User::factory()->create([
            'name' => 'Inactive User',
            'email' => 'inactive@example.com',
            'account_status' => 'inactive',
        ]);
    }
}
