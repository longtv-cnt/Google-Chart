<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Houses>
 */
class HousesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'price' => $this->faker->numberBetween(100000, 1000000),
            'image' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
            'description' => $this->faker->text(200),
            'type_id' => $this->faker->numberBetween(1, 7),
            //
        ];
    }
}
