<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            StaffsTableSeeder::class,
            WorksTableSeeder::class,
            ModulesTableSeeder::class,
            RulesTableSeeder::class,
            PrisonsTableSeeder::class,
            UsersTableSeeder::class,
            DutyTypesTableSeeder::class,
            DutiesTableSeeder::class,
        ]);
    }
}
