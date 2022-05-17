<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 2000; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->sentence(4);
            $newPost->post_image = $faker->imageUrl(300, 400, 'post', true);
            $newPost->post_content = $faker->paragraph(50);
            $newPost->post_date = $faker->dateTimeThisYear();
            $newPost->author = $faker->name();
            $newPost->category = $faker->word();
            // $newPost->slug = Str::slug($newPost->title, "-");
            $newPost->save();
        }
    }
}
