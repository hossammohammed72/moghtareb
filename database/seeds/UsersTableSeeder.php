<?php

use Illuminate\Database\Seeder;

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
        $user->email = $faker->safeEmail->unique();
        $user->status = rand(0,1) < 0.5;
        $user->save();  
      }
    }
}
