<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker()->name,
            'age' => $this->faker()->numberBetween(12, 25),
            'city' => $this->faker()->randomElement(['Hai Phong', 'Ha Noi', 'Ho Chi Minh', 'Da Nang', 'Can Tho','Jacarta','Tokyo','New York','London','Paris']),
            'course' => $this->faker()->randomElement(['PHP', 'Java', 'Python', 'C#', 'C++','C','Ruby','Swift','Kotlin','Go']),
            'class' => $this->faker()->randomElement(['6A','7B','basic','advanced','intermediate','beginner','advanced','intermediate','beginner','advanced','intermediate','beginner']),
            //
        ];
    }
}
