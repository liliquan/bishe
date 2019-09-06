<?php

use Illuminate\Database\Seeder;

class RulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            ['name' => '后台首页' , 'route' => 'index.index' , 'parent_id' => '0' , 'is_hidden' => '0' , 'sort' => '1' , 'status' => '1', 'fonts' => 'home'],
            ['name' => '欢迎界面' , 'route' => 'index.main' , 'parent_id' => '1' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '后台授权' , 'route' => '' , 'parent_id' => '0' , 'is_hidden' => '0' , 'sort' => '2' , 'status' => '1', 'fonts' => 'users'],
            ['name' => '管理员管理' , 'route' => 'admins.index' , 'parent_id' => '3' , 'is_hidden' => '0' , 'sort' => '1' , 'status' => '1', 'fonts' => ''],
            ['name' => '添加页面' , 'route' => 'admins.create' , 'parent_id' => '4' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '添加数据' , 'route' => 'admins.store' , 'parent_id' => '4' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '修改页面' , 'route' => 'admins.edit' , 'parent_id' => '4' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '数据更新' , 'route' => 'admins.update' , 'parent_id' => '4' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '状态修改' , 'route' => 'admins.status' , 'parent_id' => '4' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '删除' , 'route' => 'admins.destroy' , 'parent_id' => '4' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '角色管理' , 'route' => 'roles.index' , 'parent_id' => '3' , 'is_hidden' => '0' , 'sort' => '2' , 'status' => '1', 'fonts' => ''],
            ['name' => '添加页面' , 'route' => 'roles.create' , 'parent_id' => '11' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '添加数据' , 'route' => 'roles.store' , 'parent_id' => '11' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '修改页面' , 'route' => 'roles.edit' , 'parent_id' => '11' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '数据更新' , 'route' => 'roles.update' , 'parent_id' => '11' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '权限分配页面' , 'route' => 'roles.access' , 'parent_id' => '11' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '权限分配' , 'route' => 'roles.group-access' , 'parent_id' => '11' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '删除角色' , 'route' => 'roles.destroy' , 'parent_id' => '11' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '权限管理' , 'route' => 'rules.index' , 'parent_id' => '3' , 'is_hidden' => '0' , 'sort' => '3' , 'status' => '1', 'fonts' => ''],
            ['name' => '添加页面' , 'route' => 'rules.create' , 'parent_id' => '19' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '添加数据' , 'route' => 'rules.store' , 'parent_id' => '19' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '修改页面' , 'route' => 'rules.edit' , 'parent_id' => '19' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '数据更新' , 'route' => 'rules.update' , 'parent_id' => '19' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '状态修改' , 'route' => 'rules.status' , 'parent_id' => '19' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '删除权限' , 'route' => 'rules.destroy' , 'parent_id' => '19' , 'is_hidden' => '1' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '操作日志' , 'route' => 'actions.index' , 'parent_id' => '3' , 'is_hidden' => '0' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '删除日志' , 'route' => 'actions.destroy' , 'parent_id' => '26' , 'is_hidden' => '255' , 'sort' => '255' , 'status' => '1', 'fonts' => ''],
            ['name' => '客户信息' , 'route' => '' , 'parent_id' => '0' , 'is_hidden' => '0' , 'sort' => '1' , 'status' => '1', 'fonts' => 'desktop'],
            ['name' => '信息管理' , 'route' => 'user.index' , 'parent_id' => '28' , 'is_hidden' => '0' , 'sort' => '255' , 'status' => '1', 'fonts' => 'user'],
            ['name' => '信息保存' , 'route' => 'user.save' , 'parent_id' => '29' , 'is_hidden' => '0' , 'sort' => '255' , 'status' => '1', 'fonts' => 'desktop'],
        ];
        \App\Models\Rule::query()->insert($arr);
    }
}



























