<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\House;


class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100 ; $i++){
            $newHouse = new House();
            $newHouse->address = $faker->streetAddress();
            $newHouse->postal_code = $faker->postcode();
            $newHouse->city = $faker->city();
            $newHouse->region = $faker->state();
            $newHouse->nation = $faker->country();
            $newHouse->square_meters = $faker->numberBetween(25, 550);
            $newHouse->rooms = $faker->numberBetween(1, 20);
            $newHouse->bathrooms = $faker->numberBetween(1, 6);
            $newHouse->description = $faker->paragraph(5);
            $newHouse->price = $faker->randomFloat(2, 50000, 40000000);
            $newHouse->image= $faker->imageUrl(360, 500, 'houses', true, 'casa');;
            $newHouse->is_available = $faker->boolean();
            $newHouse->is_for_sale = $faker->boolean();
            $newHouse->save();
        }

    }
}
