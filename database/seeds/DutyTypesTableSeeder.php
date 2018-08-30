<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DutyTypesTableSeeder extends Seeder
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
            DB::table('duty_types')->insert([
                'name' => $faker->words($nb = 2, $asText = true),
                'status' => 1,
            ]);
        }
    }
}
