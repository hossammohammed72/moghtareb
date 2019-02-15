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
        $room->cupboards = rand(1,20);
        $room->desks = rand(1,20);
        $room->balcony = $i % 2 == 0 ? "1" : "0";
        $room->ac = $i % 2 == 0 ? "1" : "0";
        $room->price = rand(200,3000);
        $room->city = $faker->city;
        $room->address = $faker->address;
        $room->image = $i.'.jpg';
        $room->save();  
      }
    }
}
