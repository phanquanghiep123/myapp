<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'id'    => 1,
            'name'  => 'Admin menus',
            'slug' => 'admin-menus',
            'class_name' => 'c_admin-menus',
            'id_name'   => 'i_admin-menus',
            'status'   => 1
        ]);
    }
}
