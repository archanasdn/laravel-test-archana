<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        // Insert an admin user
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'Admin',
            'password' => Hash::make('password123'),
        ]);
        // Agent users
        DB::table('users')->insert([
            'name' => 'Agent 1',
            'email' => 'agent1@example.com',
            'password' => Hash::make('password'),
            'role' => 'agent',
        ]);

        DB::table('users')->insert([
            'name' => 'Agent 2',
            'email' => 'agent2@example.com',
            'password' => Hash::make('password'),
            'role' => 'agent',
        ]);
    }
}
