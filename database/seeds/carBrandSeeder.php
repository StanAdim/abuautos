<?php

use Illuminate\Database\Seeder;

class carBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $car = \App\CarBrand::create([
           'brandName'=> 'Toyota'
       ]);

       $car -> save();

       $car = \App\CarBrand::create([
           'brandName'=> 'Nissan'
       ]);

       $car -> save();

       $car = \App\CarBrand::create([
           'brandName'=> 'Bmw'
       ]);

       $car -> save();

       $car = \App\CarBrand::create([
           'brandName'=> 'Mc Benz'
       ]);

       $car -> save();
    }
}
