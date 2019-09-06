<?php

namespace App\Observers;

use Cache;

class RoleObserver
{
    /**
     * 删除角色事件
     */
    public function deleting()
    {
        return Cache::tags('rbac')->flush();
    }
}