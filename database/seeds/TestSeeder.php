<?php

use Illuminate\Database\Seeder;
use \DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = \Faker\Factory::create();
        $data = [];*/

        DB::table('test')->truncate();

        /*for($i = 0; $i < 100; $i++){
            array_push($data, [
                'name' => $faker->name,
                'email' => $faker->email,
                'age' => rand(18, 55),
                'country_code' => $faker->stateAbbr
            ]);
        }

        DB::table('test')->insert($data);*/

        factory('App\Test', 100)->create();
    }
}
