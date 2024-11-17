<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ CommentTableSeeder::class ]);
        $this->call([ StudentTableSeeder::class ]);
        $this->call([ RoleTableSeeder::class ]);
        $this->call([ UserallTableSeeder::class ]);
        $this->call([ RegusersTableSeeder::class ]);
        $this->call([ FoodsTableSeeder::class ]);
      

        
    }
}
