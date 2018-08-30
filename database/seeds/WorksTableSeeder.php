<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            'name' => 'Works 001',
            'status' => 1
        ]);
        DB::table('works')->insert([
            'name' => 'Works 002',
            'status' => 1
        ]);
        DB::table('works')->insert([
            'name' => 'Works 003',
            'status' => 1
        ]);
        DB::table('works')->insert([
            'name' => 'Works 004',
            'status' => 1
        ]);
    }
}
