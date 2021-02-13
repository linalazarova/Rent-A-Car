<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Seeding the database
        \DB::table('brand')->insert([
            [
                'id' => 1,
                'name' => 'Tesla',
                'year_of_creation' => 2003
            ],
            [
                'id' => 2,
                'name' => 'Renault',
                'year_of_creation' => 1899
            ],
            [
                'id' => 3,
                'name' => 'Mercedes',
                'year_of_creation' => 1926
            ]
        ]);

        \DB::table('carmodels')->insert([
            [
                'id' => 1,
                'name' => 'Model S'
            ],
            [
                'id' => 2,
                'name' => 'Megane'
            ],
            [
                'id' => 3,
                'name' => 'X166'
            ]
        ]);

        \DB::table('cars')->insert([
            [
                'id' => 1,
                'image' => 'storage/cars/88bab9397c23d9b1b7c35733473db3e0.jpg',
                'car_model_id' => 1,
                'brand_id'=> 1,
                'year_of_production' => 2017               
            ],
            [
                'id' => 2,
                'image' => 'storage/cars/040467913f4b0a52f35b624b044cf583.jpg',
                'car_model_id' => 2,
                'brand_id'=> 2,
                'year_of_production' => 2004
            ],
            [
                'id' => 3,
                'image' => 'storage/cars/a25b4729ab3bdbee4e3f97b0af66894b.jpg',
                'car_model_id' => 3,
                'brand_id'=> 3,
                'year_of_production' => 2019
            ]
        ]);

        \DB::table('reservations')->insert([
            [
                'id' => 1,
                'first_name'=>"John",
                'last_name'=>"Doe",
                'telephpne'=>"0999",
                'brand_id'=> 1,
                'car_model_id' => 1,
                'date_from'=>date('Y-m-d'),
                'date_to'=>date('Y-m-d'),
                'price'=>100            
            ],
            [
                'id' => 2,
                'first_name'=>"Jane",
                'last_name'=>"Doe",
                'telephpne'=>"088",
                'brand_id'=> 2,
                'car_model_id' => 2,
                'date_from'=>date('Y-m-d'),
                'date_to'=>date('Y-m-d'),
                'price'=>80           
            ],
            [
                'id' => 3,
                'first_name'=>"Maria",
                'last_name'=>"Lee",
                'telephpne'=>"0777",
                'brand_id'=> 3,
                'car_model_id' => 3,
                'date_from'=>date('Y-m-d'),
                'date_to'=>date('Y-m-d'),
                'price'=>150           
            ],

        ]);
    }
}

