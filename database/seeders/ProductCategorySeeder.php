<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
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
                'slug' => 'industrial-and-commercial-range-fans',
                'title' => 'Industrial & Commercial Range Fans',
                'image' => 'category-industrial-and-commercial-range-fans.jpg',
            ],
            [
                'slug' => 'domestic-and-commercial-range',
                'title' => 'Domestic & Commercial Range',
                'image' => 'category-domestic-and-commercial-range-fans.jpg',
            ],
            [
                'slug' => 'fire-rated-fans',
                'title' => 'Fire Rated Fans',
                'image' => 'category-fire-rated-fans.jpg',
            ],
            [
                'slug' => 'explosion-proof-fans',
                'title' => 'Explosion Proof Fans',
                'image' => 'category-explosion-proof-fans.jpg',
            ],
            [
                'slug' => 'hvls-fans',
                'title' => 'HVLS-fans',
                'image' => 'category-hvls-fans.jpg',
            ],
            [
                'slug' => 'wind-turbine-ventilators',
                'title' => 'Wind Turbine Ventilators',
                'image' => 'category-wind-turbine-ventilators.jpg',
            ],
            [
                'slug' => 'evaporative-cooling-units',
                'title' => 'Evaporative Cooling Units',
                'image' => 'category-evaporative-cooling-units.jpg',
            ],
            [
                'slug' => 'evaporative-cooling-pads',
                'title' => 'Evaporative Cooling Pads',
                'image' => 'category-evaporative-cooling-pads.jpg',
            ],
            [
                'slug' => 'humidifiers-and-dehumidifiers',
                'title' => 'Humidifiers & Dehumidifiers',
                'image' => 'category-humidifiers-and-dehumidifiers.jpg',
            ],
            [
                'slug' => 'ventilation-accessories',
                'title' => 'Ventilation Accessories',
                'image' => 'category-ventilation-accessories.jpg',
            ],
        ];

        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}
