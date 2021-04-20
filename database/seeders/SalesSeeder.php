<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sales;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sales::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 10; $i++) { 
            Sales::create(
                [
                    'name' => $faker->name,
                ]
            );
        }
    }
}
