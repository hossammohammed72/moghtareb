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
    	for ($i=1; $i <30 ; $i++) { 
        $faker = Faker\Factory::create();
        $user = new App\User;
        $user->name = $faker->name;
        $user->password = Hash::make('secret');
        $user->email = $faker->unique()->email;
        $user->status = $i % 2 == 0 ? "1" : "0";
        $user->save();  
      }
    }
}
