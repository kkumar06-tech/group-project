<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Foods;
class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Foods::create( [ 
        
            'food_name'=>'apple',
            'calories_per_100g'=> ('61.00'),
            'protein_per_100g'=>'0.13',
            'carbs_per_100g'=>'20.10',
            'fats_per_100g'=>'0.15'

            ] );


            Foods::create( [ 
                
                'food_name'=>'banana',
                'calories_per_100g'=> ('85.00'),
                'protein_per_100g'=>'0.73',
                'carbs_per_100g'=>'20.10',
                'fats_per_100g'=>'0.22'
    
                ] );
                Foods::create( [ 
                    
                    'food_name'=>'avocado',
                    'calories_per_100g'=> ('223.00'),
                    'protein_per_100g'=>'1.82',
                    'carbs_per_100g'=>'8.32',
                    'fats_per_100g'=>'20.30'
        
                    ] );

                    Foods::create( [ 
                        
                        'food_name'=>'chickpeas',
                        'calories_per_100g'=> ('383.23'),
                        'protein_per_100g'=>'21.30',
                        'carbs_per_100g'=>'60.40',
                        'fats_per_100g'=>'6.27'
            
                        ] );


                        Foods::create( [ 
                            
                            'food_name'=>'beef',
                            'calories_per_100g'=> ('233.00'),
                            'protein_per_100g'=>'18.40',
                            'carbs_per_100g'=>'0.00',
                            'fats_per_100g'=>'17.80'
                
                            ] );


                            Foods::create( [ 
                                
                                'food_name'=>'chicken',
                                'calories_per_100g'=> ('107.37'),
                                'protein_per_100g'=>'22.50',
                                'carbs_per_100g'=>'0.00',
                                'fats_per_100g'=>'1.93'
                    
                                ] );



                                Foods::create( [ 
                                    
                                    'food_name'=>'egg',
                                    'calories_per_100g'=> ('44.80'),
                                    'protein_per_100g'=>'10.10',
                                    'carbs_per_100g'=>'0.16',
                                    'fats_per_100g'=>'0.74'
                        
                                    ] );


                                  
    }
}
