<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * CREATE TABLE `admin_role` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `admin_id` int(11) NOT NULL COMMENT '管理员id',
    `role_id` int(11) NOT NULL COMMENT '角色id',
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `admin_role` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `admin_id` int(11) NOT NULL COMMENT '管理员id',
    `role_id` int(11) NOT NULL COMMENT '角色id',
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;");

        Schema::table('admin_role', function (Blueprint $table) {
            $columns = [
                'admin_id',
                'role_id',
                'created_at',
                'updated_at',
            ];

            foreach ($columns as $column) {
                $table->index($column);
            }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_role');
    }
}
