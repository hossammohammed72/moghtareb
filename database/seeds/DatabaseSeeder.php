<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RentsTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(RoomsTableSeeder::class);

    }
}
