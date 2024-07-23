<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition(): array
    {
        $price = $this->faker->randomFloat(2, 1, 100);
        return [
            'name' => $this->faker->word,
            'thumbnail' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
            'short_description' => $this->faker->sentence,
            'price' => $price,
            'price_sale' => $this->faker->randomFloat(2, 1, $price),
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
