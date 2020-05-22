<?php

use Illuminate\Database\Seeder;

class CityCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CityCenter::class,100)->create();

    }
}
