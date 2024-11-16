<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\userall;
class UserallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        userall::create( [ 
            'name'=>'keshav',
            'email'=>'kk12@gmial.com',
            'password'=>'j3ne9j',
            'role'=>'normaluser'
            ] ); 

            userall::create( [ 
                'name'=>'anshu',
                'email'=>'anshu12@gmial.com',
                'password'=> bcrypt('sdw212wse9j'),
                'role'=>'normaluser'
                ] ); 

                userall::create( [ 
                    'name'=>'Cena orton',
                    'email'=>'cowwe@gmial.com',
                    'password'=> bcrypt('cowwe2wse9j'),
                    'role'=>'nutritionist'
                    ] ); 
    }
}
