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
        $this->call(AdminRoleTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(RoleAuthTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(RulesTableSeeder::class);
    }
}
