<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Database\Factories\CarsFactory;
// use Faker\Generator as Faker;
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Cars::factory()->count(100)->create();
    }
    //

        //$faker = Factory::create();
        // for ($i = 0; $i < 1000; $i++) {
        //     Cars::create([
        //         'name' => $faker->name,
        //         'producer' => $faker->randomElement(['Toyota', 'Honda', 'Mercedes', 'BMW', 'Audi','Jacarta','Tokyo','New York','London','Paris']),
        //         'color' => $faker->randomElement(['red', 'blue', 'green', 'yellow', 'black','white','gray','brown','pink','purple']),
        //     ]);
        // }
        //
    }

