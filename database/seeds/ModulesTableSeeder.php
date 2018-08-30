<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            'name'   => 'Manage users',
            'route'  => 'users',
            'status' => 1
        ]);
        DB::table('modules')->insert([
            'name'   => 'Manage modules',
            'route'  => 'modules',
            'status' => 1
        ]);
        DB::table('modules')->insert([
            'name'   => 'Manage roles',
            'route'  => 'roles',
            'status' => 1
        ]);
        DB::table('modules')->insert([
            'name'   => 'Manage menus',
            'route'  => 'menus',
            'status' => 1
        ]);
        DB::table('modules')->insert([
            'name'   => 'Manage posts',
            'route'  => 'posts',
            'status' => 1
        ]);
    }
}
