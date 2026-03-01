<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Vanilo\Product\Models\ProductState;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Model>
 */
class ProductFactory extends Factory
{
    protected $model = \vanilo\Product\Models\Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'             => $this->faker->words(3, true),
            'sku'              => $this->faker->unique()->ean8(),
            'stock'            => $this->faker->numberBetween(0, 100),
            'price'            => $this->faker->randomFloat(2, 10, 5000),
            'original_price'   => $this->faker->randomFloat(2, 10, 5000),
            'weight'           => $this->faker->randomFloat(2, 0.1, 100),
            'width'            => $this->faker->randomFloat(2, 0.1, 100),
            'height'           => $this->faker->randomFloat(2, 0.1, 100),
            'length'           => $this->faker->randomFloat(2, 0.1, 100),
            'slug'             => $this->faker->slug(),
            'excerpt'          => $this->faker->sentence(10),
            'description'      => $this->faker->paragraph(5),
            'state'            => ProductState::ACTIVE(),
            'meta_keywords'    => $this->faker->words(5, true),
            'meta_description' => $this->faker->sentence(15),
        ];
    }
}
