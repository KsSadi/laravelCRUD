<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       User::create([
           'name' => 'Rafi',
           'email'=> 'radfi@gmail.com',
           'password'=>'123456'
       ]
       );
        User::create([
                'name' => 'sadi',
                'email'=> 'radsddfi@gmail.com',
                'password'=>'12d3456'
            ]
        );


    }
}
