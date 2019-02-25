<?php

use Illuminate\Database\Seeder;
use \App\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 50 ; $i++) {

        $newUser = new User;
        $newUser->name = $faker->firstName;
        $newUser->lastname = $faker->lastName;
        $newUser->age = rand(10, 90);

        $newUser->save();
      }
    }
}
