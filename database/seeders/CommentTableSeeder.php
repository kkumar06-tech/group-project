<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create( [ 
            'headline'=>'big bang',
            'message'=>'big bang is not real , its just a theory to prove that scoence knows everything',
            ] );
    }
}
