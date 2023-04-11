<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageSettings;
class PageSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageSettings::create([
            'name' => 'Neptun+',
            'school_name'=>"Eszterházy Károly Katolikus Egyetem",
            'short_desc'=>'Egységes Tanulmányi Rendszer',
            'version' => '2982',
            'contact_email' => 'info@mywebsite.com',
            'logo' => 'https://www.mywebsite.com/logo.png'
        ]);
    }
}
