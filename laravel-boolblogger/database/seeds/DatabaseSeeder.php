<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            UserInfosTableSeeder::class,
            CategoriesTableSeeder::class,
            PostsTableSeeder::class,
            CategoryPostTableSeeder::class,
            CommentsTableSeeder::class,
        ]);
    }
}
