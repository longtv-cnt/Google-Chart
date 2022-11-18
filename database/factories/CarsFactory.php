<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarsFactory extends Factory
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
            'producer' => $this->faker->randomElement(['Toyota', 'Honda', 'Mercedes', 'BMW', 'Audi','Jacarta','Tokyo','New York','London','Paris']),
            'color' => $this->faker->randomElement(['red', 'blue', 'green', 'yellow', 'black','white','gray','brown','pink','purple']),
            //
        ];
    }
}
