<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrisonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('prisons')->insert([
                'name' => $faker->name,
                'longitude' => $faker->longitude,
                'latitude' => $faker->latitude,
                'prison_code' => $faker->unique()->ean8,
                'status' => 1,
                'street' => $faker->streetName,
                'postcode' => $faker->postcode,
                'city' => $faker->city,
                'town' => $faker->citySuffix,
                'county' => $faker->country,
            ]);
        }
    }
}
