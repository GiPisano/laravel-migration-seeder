<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 500; $i++ ){
            
            $train = new train;
            $train_code = "";
            
            for($x = 0; $x < 5; $x++){
                $train_code .= $faker->randomLetter();
            };
            
            $train->society = $faker->company();
            $train->departure_station = $faker->company();
            $train->arrival_station = $faker->address();
            $train->departure_time = $faker->date() . " " . $faker->time();
            $train->arrival_time = $faker->date() . " " . $faker->time();
            $train->train_code = $train_code;
            $train->wagons_number = $faker->numberBetween(1, 25);
            $train->save();
        }

    }
}
