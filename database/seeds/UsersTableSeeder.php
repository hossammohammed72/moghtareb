<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	for ($i=1; $i <20 ; $i++) {
        $faker = Faker\Factory::create();
        $user = new App\User;
        $user->name = $faker->name;
        $user->password = Hash::make('secret');
        $user->email = $faker->unique()->email;
        $user->status = $i % 2 == 0 ? "1" : "0";
        $user->smoking = $i % 2 == 0 ? "1" : "0";
        $user->loud_voice = $i % 2 == 0 ? "1" : "0";
        $user->ac = $i % 2 == 0 ? "1" : "0";
        $user->age = $i % 2 == 0 ? "1" : "0";
        $user->student = $i % 2 == 0 ? "1" : "0";
        $user->city = $faker->city;
        $user->rent = rand(200,700).";".rand(200,700);
        $user->gender = $i % 2 == 0 ? "1" : "0";
        $user->rate = rand(1,5);
        $user->phone = $faker->phoneNumber;
        $user->save();
      }
    }
}
