<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TodoItem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create 10 TodoItems with status 0 (pending)
        TodoItem::factory(10)->create([
            'status' => 0,
        ]);

        // Create 5 TodoItems with status 1 (completed)
        TodoItem::factory(5)->create([
            'status' => 1,
        ]);
    }
}
