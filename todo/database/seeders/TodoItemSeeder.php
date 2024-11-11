<?php


// File: database/seeders/TodoItemSeeder.php

namespace Database\Seeders;

use App\Models\TodoItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TodoItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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