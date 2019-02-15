<?php

use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //
        for ($i=1; $i <50 ; $i++) { 
        $faker = Faker\Factory::create();
        $person = new App\Models\Person;
        $person->user_id = 1;
        $person->smoking = rand(0,1) < 0.5;
        $person->loud_voice = rand(0,1) < 0.5;
        $person->ac = rand(0,1) < 0.5;
        $person->age = rand(0,1) < 0.5;
        $person->student = rand(0,1) < 0.5;
        $person->city = $faker->city;
        $person->gender = $faker->gender;
        $person->save();  
      }
    }
}
