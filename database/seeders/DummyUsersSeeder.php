<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'guru',
                'email'=>'guru@gmail.com',
                'role'=>'guru',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'orangtua',
                'email'=>'orangtua@gmail.com',
                'role'=>'orangtua',
                'password'=>bcrypt('123456')
            ],

        ];

        foreach($userData as $key => $val ){
            User::create($val);
        }
    }
}
