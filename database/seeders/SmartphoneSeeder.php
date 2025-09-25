<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Smartphone;

class SmartphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Smartphone::truncate();

        Smartphone::create([
            'name' => 'Galaxy S24 Ultra',
            'brand' => 'Samsung',
            'image_url' => 'https://placehold.co/600x400/2B343B/FFFFFF?text=Galaxy+S24',
            'description' => 'Smartphone flagship terbaru dari Samsung dengan fitur AI canggih dan S Pen yang terintegrasi untuk produktivitas maksimal.',
            'rating' => 4.9,
            'is_booked' => false,
        ]);

        Smartphone::create([
            'name' => 'iPhone 15 Pro',
            'brand' => 'Apple',
            'image_url' => 'https://placehold.co/600x400/EAEAEA/333333?text=iPhone+15',
            'description' => 'Ditenagai chip A17 Pro, bodi titanium yang ringan dan kuat, serta sistem kamera Pro yang paling canggih di iPhone.',
            'rating' => 4.8,
            'is_booked' => false,
        ]);

        Smartphone::create([
            'name' => 'Pixel 8 Pro',
            'brand' => 'Google',
            'image_url' => 'https://placehold.co/600x400/778899/FFFFFF?text=Pixel+8',
            'description' => 'Kamera terbaik di kelasnya dengan fitur-fitur eksklusif Google AI untuk editing foto dan video yang menakjubkan.',
            'rating' => 4.7,
            'is_booked' => false,
        ]);

         Smartphone::create([
            'name' => 'Xiaomi 14',
            'brand' => 'Xiaomi',
            'image_url' => 'https://placehold.co/600x400/f48c06/FFFFFF?text=Xiaomi+14',
            'description' => 'Performa kencang dengan Snapdragon 8 Gen 3 dan kolaborasi kamera legendaris bersama Leica.',
            'rating' => 4.6,
            'is_booked' => false,
        ]);

         Smartphone::create([
            'name' => 'OnePlus 12',
            'brand' => 'OnePlus',
            'image_url' => 'https://placehold.co/600x400/e63946/FFFFFF?text=OnePlus+12',
            'description' => 'Pengalaman flagship yang mulus dengan layar superior dan pengisian daya super cepat.',
            'rating' => 4.7,
            'is_booked' => false,
        ]);
    }
}

