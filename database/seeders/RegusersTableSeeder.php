<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Regusers;
class RegusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Regusers::create( [ 
            'user_id'=>1,
            'gender'=>'male',
            'age'=>'21',
            'height'=> ('5.9'),
            'weight'=>'65.5',
            'goal'=>'Musclegain',
            'exer_type'=>'active'

            ] );
    }
}
