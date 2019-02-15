<?php

use Illuminate\Database\Seeder;

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
        $room->balcony = rand(0,1) < 0.5;
        $room->ac = rand(0,1) < 0.5;
        $room->price = rand(200,3000);
        $room->city = $faker->city;
        $room->address = $faker->address;
        $room->image = $i.'.jpg';
        $room->save();  
      }
    }
}
