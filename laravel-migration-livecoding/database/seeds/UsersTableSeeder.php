<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "Gianna",
                "email" => "ggaa@gmail.com",
                "password" => "41252",
            ],
            [
                "name" => "Johnny",
                "email" => "ggs@gmail.com",
                "password" => "41252",
            ],
            [
                "name" => "Luke",
                "email" => "lk@gmail.com",
                "password" => "41252",
            ],
            [
                "name" => "Alexej",
                "email" => "ax@gmail.com",
                "password" => "41252",
            ],

        ];

        foreach( $users as $user ){
            $newUser = new User();
            $newUser->name = $user['name'];
            $newUser->email = $user['email'];
            $newUser->password = $user['password'];
            $newUser->save();
        }

    }
}
