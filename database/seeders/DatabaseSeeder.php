<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Test User 1', 'email' => 'test_user1@email.com', 'password' => bcrypt('testpass123')]);
        User::create(['name' => 'Test User 2', 'email' => 'test_user2@email.com', 'password' => bcrypt('testpass234')]);
        User::create(['name' => 'Test User 3', 'email' => 'test_user3@email.com', 'password' => bcrypt('testpass345')]);
        // \App\Models\User::factory(10)->create();
    }
}
