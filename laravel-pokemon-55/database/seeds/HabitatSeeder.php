<?php

use App\Habitat;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class HabitatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 80 ; $i++) {
            $newHabitat = new Habitat();
            $newHabitat->name = $faker->unique()->word();
            $random = rand(1, 99);
            $newHabitat->image_url = "https://picsum.photos/id/$random/350/500";
            $newHabitat->affinity_types = $faker->randomElement([
                "Normal",
                "Fire",
                "Water",
                "Grass",
                "Electric",
                "Ice",
                "Fighting",
                "Poison",
                "Ground",
                "Flying",
                "Psychic",
                "Bug",
                "Rock",
                "Ghost",
                "Dark",
                "Dragon",
                "Steel",
                "Fairy"]);
            $newHabitat->description = $faker->sentence(6);
            $newHabitat->avg_climate = rand(0, 100);
            $newHabitat->save();
        }
    }
}
