<?php

use Illuminate\Database\Seeder;
use App\House;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BusSeeder::class);
        $this->call(CityCenterSeeder::class);
        $this->call(SupermarketSeeder::class);
        $this->call(PharmacySeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(GymSeeder::class);
        $this->call(MetroSeeder::class);
        $this->call(ParkSeeder::class);
        $this->call(HouseSeeder::class);




        /*$house = new House;
        $house->description = "kai gamw";
        $house->save();
        $this->call(UsersTableSeeder::class);*/
    }
}
