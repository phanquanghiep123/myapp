<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DutiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            $datetime = Carbon::now()->subDays(random_int(1, 5));
            DB::table('duties')->insert([
                'duty_code' => $faker->unique()->ean13,
                'date' => $datetime->format('Y-m-d H:i:s'),
                'start_time' => $datetime->format('Y-m-d H:i:s'),
                'end_time' => $datetime->addHour(random_int(1, 48))->format('Y-m-d H:i:s'),
                'vacancies' => $faker->words($nb = 2, $asText = true),
                'created_by' => 1,
                'prison_id' => random_int(1, 10),
                'duty_type_id' => random_int(1, 10),
                'location_name' => $faker->words($nb = 2, $asText = true),
                'location_street' => $faker->streetAddress,
                'location_city' => $faker->city,
                'location_town' => $faker->citySuffix,
                'location_postcode' => $faker->postcode,
                'prisoner_name' => $faker->words($nb = 2, $asText = true),
                'extra_info' => $faker->text($maxNbChars = 200),
                'notes' => $faker->text($maxNbChars = 200),
                'status' => 1,
                'created_at' => $datetime->format('Y-m-d H:i:s'),
                'updated_at' => $datetime->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
