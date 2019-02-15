<?php

use Illuminate\Database\Seeder;

class RentsTableSeeder extends Seeder
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
        $rent = new App\Models\Rent;
        $rent->user_id = $i;
        $rent->room_id = $i;
        $rent->approved = $i % 2 == 0 ? "1" : "0";
        $rent->save();  
      }
    }
}
