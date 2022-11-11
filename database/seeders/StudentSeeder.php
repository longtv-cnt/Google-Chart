<?php

namespace Database\Seeders;

use App\Models\Students;
;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    create 100 record
        $faker = Factory::create();
        for ($i = 0; $i < 100; $i++) {
            Students::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(12, 25),
                'city' => $faker->randomElement(['Hai Phong', 'Ha Noi', 'Ho Chi Minh', 'Da Nang', 'Can Tho','Jacarta','Tokyo','New York','London','Paris']),
                'course' => $faker->randomElement(['PHP', 'Java', 'Python', 'C#', 'C++','C','Ruby','Swift','Kotlin','Go']),
                'class' => $faker->randomElement(['6A','7B','basic','advanced','intermediate','beginner','advanced','intermediate','beginner','advanced','intermediate','beginner']),
            ]);
        }
    }
}

