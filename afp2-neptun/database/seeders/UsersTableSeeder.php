<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Ács Róbert',
            'ncode' => "tc92hl",
            'email' => 'acs.robert2000@gmail.com',
            'rank_id' => 1,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Diak Egy',
            'ncode' => "1kaid",
            'email' => 'diak1@gmail.com',
            'rank_id' => 0,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Tanár',
            'ncode' => "eeergs",
            'email' => 'tanar@gmail.com',
            'rank_id' => 1,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin Boi',
            'ncode' => "aaddmin",
            'email' => 'admin@admin.com',
            'rank_id' => 2,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Tajti Tibor',
            'ncode' => "TAJTIBOR",
            'email' => 'tajti@tibor.com',
            'rank_id' => 2,
        ]);
    }
}
