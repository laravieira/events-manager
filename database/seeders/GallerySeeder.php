<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::factory()->create(['user_id' => 1,  'image' => 'events-manager/gallery/boston-public-library-KeIJEFbC630-unsplash.jpg', 'caption' => 'Photo by Boston Public Library on Unsplash']);
        Gallery::factory()->create(['user_id' => 2,  'image' => 'events-manager/gallery/catia-dombaxe-jOLZ7ICnAj8-unsplash.jpg', 'caption' => 'Photo by Catia Dombaxe on Unsplash']);
        Gallery::factory()->create(['user_id' => 3,  'image' => 'events-manager/gallery/jc-gellidon-rDZmIzTUmAg-unsplash.jpg', 'caption' => 'Photo by JC Gellidon on Unsplash']);
        Gallery::factory()->create(['user_id' => 4,  'image' => 'events-manager/gallery/jefferson-sees-2AC50zy6ukE-unsplash.jpg', 'caption' => 'Photo by Jefferson Sees on Unsplash']);
        Gallery::factory()->create(['user_id' => 5,  'image' => 'events-manager/gallery/jefferson-sees-b6jjcwoBfRQ-unsplash.jpg', 'caption' => 'Photo by Jefferson Sees on Unsplash']);
        Gallery::factory()->create(['user_id' => 6,  'image' => 'events-manager/gallery/markus-spiske-NkX80nZ-ST0-unsplash.jpg', 'caption' => 'Photo by Markus Spiske on Unsplash']);
        Gallery::factory()->create(['user_id' => 7,  'image' => 'events-manager/gallery/ola-noland-AWodaMBNtPo-unsplash.jpg', 'caption' => 'Photo by Ola Noland on Unsplash']);
        Gallery::factory()->create(['user_id' => 8,  'image' => 'events-manager/gallery/peter-thomas-C7-PNQF5hww-unsplash.jpg', 'caption' => 'Photo by Peter Thomas C7 on Unsplash']);
        Gallery::factory()->create(['user_id' => 9,  'image' => 'events-manager/gallery/peter-thomas-YjN6Xgo5n40-unsplash.jpg', 'caption' => 'Photo by Peter Thomas on Unsplash']);
        Gallery::factory()->create(['user_id' => 10, 'image' => 'events-manager/gallery/wesley-tingey-Ifp5O7NVu-o-unsplash.jpg', 'caption' => 'Photo by Wesley Tingey on Unsplash']);
    }
}
