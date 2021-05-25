<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'isUser',
                'username' => 'isUser',
                'email' => 'user@gmail.com',
                'password' => bcrypt('12345'),
                'photo' => 'user.jpg',
                'roles_id' => 2
            ],
            [
                'name' => 'isAdmin',
                'username' => 'isAdmin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
                'photo' => 'admin.jpg',
                'roles_id' => 1
            ]
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
