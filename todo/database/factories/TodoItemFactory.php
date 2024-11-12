<?php

// File: database/factories/TodoItemFactory.php

namespace Database\Factories;

use App\Models\TodoItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TodoItem::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'itemName' => $this->faker->sentence()

        ];
    }
}