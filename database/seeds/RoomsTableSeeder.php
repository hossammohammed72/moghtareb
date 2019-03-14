<?php

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //
    	for ($i=1; $i <30 ; $i++) {
        $faker = Faker\Factory::create();
        $room = new App\Models\Room;
        $room->user_id = $i;
        $room->beds = rand(1,4);
        $room->cupboards = rand(1,20);
        $room->desks = rand(1,20);
        $room->balcony = $i % 2 == 0 ? "1" : "0";
        $room->elevator = $i % 2 == 0 ? "1" : "0";
        $room->auto_washer = $i % 2 == 0 ? "1" : "0";
        $room->microwave = $i % 2 == 0 ? "1" : "0";
        $room->tv = $i % 2 == 0 ? "1" : "0";
        $room->ac = $i % 2 == 0 ? "1" : "0";
        $room->wifi = $i % 2 == 0 ? "1" : "0";
        $room->smoking = $i % 2 == 0 ? "1" : "0";
        $room->noise = $i % 2 == 0 ? "1" : "0";
        $room->sleep_early = $i % 2 == 0 ? "1" : "0";
        $room->coming_over = $i % 2 == 0 ? "1" : "0";
        $room->food_sharing = $i % 2 == 0 ? "1" : "0";
        $room->ac_lover = $i % 2 == 0 ? "1" : "0";
        $room->rent = rand(200,3000);
        $room->city = $faker->city;
        $room->rate = rand(1,5);
        $room->address = $faker->address;
        $room->image = $i.'.jpg';
        $room->save();
      }
    }
}
