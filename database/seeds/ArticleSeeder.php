<?php

use Illuminate\Database\Seeder;
use \DB;

class ArticleSeeder extends Seeder
{
    private $faker;
    /**
     * ArticleSeeder constructor.
     */
    public function __construct()
    {
        $this->faker = \Faker\Factory::create();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();

        for($i = 0 ; $i < 20; $i++){
            DB::table('articles')->insert([
                'title' => $this->faker->sentence(rand(3, 10)),
                'body' => $this->faker->sentence(200)
            ]);
        }
    }
}
