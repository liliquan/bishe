<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            ['name' => '超级管理员' , 'remark' => '拥有网站最大权限' , 'order' => '255' , 'status' => '1'],
            ['name' => '管理员' , 'remark' => '管理后台的人员' , 'order' => '255' , 'status' => '1'],
        ];
        \App\Models\Role::query()->insert($arr);
    }
}
