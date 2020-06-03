<?php

use App\User;
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
        User::create([
            'playername'=> "melchior",
            "birthday"=> Faker\Factory::create()->dateTime

        ]);
         $this->call(GameSeeder::class);
    }
}
