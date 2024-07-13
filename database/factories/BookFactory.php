<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;


class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Book::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'thumbnail' => $this->faker->imageUrl,
            'author' => $this->faker->name,
            'publisher' => $this->faker->company,
            'publication' => $this->faker->dateTime,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            'category_id' =>$this->faker->numberBetween(1, 5),
        ];
    }
}
