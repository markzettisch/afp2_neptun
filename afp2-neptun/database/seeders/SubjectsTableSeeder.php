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
            "name"=>"AFP1",
            "desc"=>"Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.",
            "suggested_semester"=>"3",
            "credit"=>"3"
        ]);
        Subject::create([
            'user_id' => "5",
            "name"=>"AFP2",
            "desc"=>"Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.",
            "suggested_semester"=>"3",
            "credit"=>"2"
        ]);
        Subject::create([
            'user_id' => "5",
            "name"=>"AFP3",
            "desc"=>"Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.",
            "suggested_semester"=>"3",
            "credit"=>"2"
        ]);
    }
}
