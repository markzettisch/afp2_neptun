<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rank;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rank::create([
            'id' => 1,
            'name' => 'Student',
        ]);
        Rank::create([
            'id' => 2,
            'name' => 'Teacher',
        ]);
        Rank::create([
            'id' => 3,
            'name' => 'Admin',
        ]);
    }
}
