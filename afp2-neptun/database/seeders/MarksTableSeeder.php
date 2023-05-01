<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\marks;
use Illuminate\Database\Seeder;

class MarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        marks::create([
            'user_id' => "5",
            "name"=>"AFP2",
            "hallgato"=>"Göröcs Lajos",
            "mark"=>"5"
        ]);
    }
}
