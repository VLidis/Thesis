<?php

use Illuminate\Database\Seeder;

class MetroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Metro::class,70)->create();
    }
}
