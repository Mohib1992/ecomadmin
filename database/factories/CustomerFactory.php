<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Konekt\Customer\Models\CustomerType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Model>
 */
class CustomerFactory extends Factory
{
    protected $model = \App\CustomerProxy::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(CustomerType::values()),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'company_name' => $this->faker->company(),
            'tax_nr' => $this->faker->regexify('[A-Z0-9]{17}'),
            'registration_nr' => $this->faker->regexify('[0-9]{8}'),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
