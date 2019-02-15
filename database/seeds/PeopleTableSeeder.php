<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
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
        $person->smoking = $i % 2 == 0 ? "1" : "0";
        $person->loud_voice = $i % 2 == 0 ? "1" : "0";
        $person->ac = $i % 2 == 0 ? "1" : "0";
        $person->age = $i % 2 == 0 ? "1" : "0";
        $person->student = $i % 2 == 0 ? "1" : "0";
        $person->city = $faker->city;
        $person->rent = rand(200,700);
        $person->gender = $i % 2 == 0 ? "1" : "0";
        $person->save();
      }
    }
}
