<?php

use App\Comment;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $postList = Post::all();

        foreach ($postList as $post) {
            for ($i=0; $i < rand(3, 12); $i++) {
                $newComment = new Comment();
                $newComment->post_id = $post->id;
                $newComment->author = $faker->name();
                $newComment->content = $faker->realText(80);
                $newComment->save();
            }
        }

    }
}
