<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestUsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->upsert([
            [
                'name'           => 'Active User',
                'email'          => 'active@test.com',
                'password'       => Hash::make('password'),
                'account_status' => 'active',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'name'           => 'Inactive User',
                'email'          => 'inactive@test.com',
                'password'       => Hash::make('password'),
                'account_status' => 'suspended',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ], ['email'], ['name', 'password', 'account_status', 'updated_at']);
    }
}
