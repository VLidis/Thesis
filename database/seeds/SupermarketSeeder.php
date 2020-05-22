<?php

use Illuminate\Database\Seeder;

class SupermarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Supermarket::class,600)->create();
    }
}
