<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'slug' => 'fresh-air-system',
                'title' => 'Fresh Air System',
                'image' => 'category-fresh-air-system.jpg',
            ],
            [
                'slug' => 'exhaust-air-system',
                'title' => 'Exhaust Air System',
                'image' => 'category-exhaust-air-system.jpg',
            ],
            [
                'slug' => 'ducting-system',
                'title' => 'Ducting System',
                'image' => 'category-ducting-system.jpg',
            ],
            [
                'slug' => 'evaporative-cooling-system',
                'title' => 'Evaporative Cooling System',
                'image' => 'category-evaporative-cooling-system.jpg',
            ],
            [
                'slug' => 'dust-collector-system',
                'title' => 'Dust Collector System',
                'image' => 'category-dust-collector-system.jpg',
            ],
            [
                'slug' => 'staircase-pressurization-system',
                'title' => 'Staircase Pressurization System',
                'image' => 'category-staircase-pressurization-system.jpg',
            ],
            [
                'slug' => 'car-park-ventilation-system',
                'title' => 'Car Park Ventilation System',
                'image' => 'category-car-park-ventilation-system.jpg',
            ],
            [
                'slug' => 'kitchen-ventilation-system',
                'title' => 'Kitchen Ventilation System',
                'image' => 'category-kitchen-ventilation-system.jpg',
            ],
            [
                'slug' => 'humidifier-and-dehumidifier-system',
                'title' => 'Humidifier & Dehumidifier System ',
                'image' => 'category-humidifier-and-dehumidifier-system.jpg',
            ],
        ];

        foreach ($categories as $category) {
            ProjectCategory::create($category);
        }
    }
}
