<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'  => 'Super',
            'last_name'   => 'Admin',
            'staff_id'    => 1,
            'work_id'     => 1,
            'email'       => 'superadmin.mypp@gmail.com',
            'password'    => bcrypt('super@dmin@!23'),
            'role_id'     => 1,
        ]);
    }
}
