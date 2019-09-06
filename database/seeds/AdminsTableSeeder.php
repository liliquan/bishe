<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                'name' => 'admin',
                'password' => '$2y$10$mQ.vJiG9U1NKH5j.T80a6OY.iyxr7IFg8BFYL9L0tlmK5Pmc3XAD2',
                'avatr' => '/uploads/images/avatrs/201909/06//1567751643_koFIgkoljx.png',
                'login_count' => '1',
                'create_ip' => '127.0.0.1',
                'last_login_ip' => '127.0.0.1',
                'status' => '1'
            ],
        ];
        \App\Models\Admin::query()->insert($arr);
    }
}
