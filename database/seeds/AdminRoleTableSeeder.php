<?php

use Illuminate\Database\Seeder;

class AdminRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [ 'admin_id' => '2', 'role_id' => '2'],
            [ 'admin_id' => '1', 'role_id' => '2'],
            [ 'admin_id' => '1', 'role_id' => '1'],
            [ 'admin_id' => '3', 'role_id' => '1'],
            [ 'admin_id' => '3', 'role_id' => '2'],
        ];
        \App\Models\AdminRole::query()->insert($arr);
    }
}
