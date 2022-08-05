<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        $users = [
            [
                'name'      => 'Pippo',
                'email'     => 'Pippo@gmail.com',
                'password'  => Hash::make('Pippo'),
            ],
            [
                'name'      => 'Marco',
                'email'     => 'Marco@gmail.com',
                'password'  => Hash::make('Marco'),
            ],
            [
                'name'      => 'Luca',
                'email'     => 'Luca@gmail.com',
                'password'  => Hash::make('Luca'),
            ],
            [
                'name'      => 'Francesco',
                'email'     => 'Francesco@gmail.com',
                'password'  => Hash::make('Francesco'),
            ],
            [
                'name'      => 'Michele',
                'email'     => 'Michele@gmail.com',
                'password'  => Hash::make('Michele'),
            ],
            [
                'name'      => 'Gonzalo',
                'email'     => 'Gonzalo@gmail.com',
                'password'  => Hash::make('Gonzalo'),
            ],

        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
