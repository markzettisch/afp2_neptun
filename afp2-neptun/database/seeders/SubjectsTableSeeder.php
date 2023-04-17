<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'user_id' => "5",
            "name"=>"AFP1"
        ]);
        Subject::create([
            'user_id' => "5",
            "name"=>"AFP2"
        ]);
        Subject::create([
            'user_id' => "5",
            "name"=>"AFP3"
        ]);
    }
}
