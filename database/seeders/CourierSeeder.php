<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Courier;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Courier::truncate();

        Courier::create([
            'name' => 'JNE',
            'price' => 10000
        ]);

        Courier::create([
            'name' => 'JNT',
            'price' => 11000
        ]);

        Courier::create([
            'name' => 'TIKI',
            'price' => 13000
        ]);

        Courier::create([
            'name' => 'SiCepat',
            'price' => 15000
        ]);

        Courier::create([
            'name' => 'AnterAja',
            'price' => 20000
        ]);
    }
}
