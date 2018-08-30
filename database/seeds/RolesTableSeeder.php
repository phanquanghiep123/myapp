<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Super Admin',
            'status' => 1
        ]);
        DB::table('roles')->insert([
            'name' => 'Detail Staff',
            'status' => 1
        ]);
        DB::table('roles')->insert([
            'name' => 'Com User',
            'status' => 1
        ]);
        DB::table('roles')->insert([
            'name' => 'Officer',
            'status' => 1
        ]);
    }
}
