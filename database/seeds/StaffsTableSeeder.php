<?php

use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
            'name' => 'staffs 001',
            'status' => 1
        ]);
        DB::table('staffs')->insert([
            'name' => 'staffs 002',
            'status' => 1
        ]);
        DB::table('staffs')->insert([
            'name' => 'staffs 003',
            'status' => 1
        ]);
        DB::table('staffs')->insert([
            'name' => 'staffs 004',
            'status' => 1
        ]);
    }
}
