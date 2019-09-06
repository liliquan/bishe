<?php

namespace App\Observers;

use App\Models\Admin;

class AdminObserver
{
    /**
     * @param Admin $admin
     */
    public function updating(Admin $admin)
    {
        $admin->clearRuleAndMenu();
    }

    /**
     * 监听用户删除事件
     */
    public function deleting(Admin $admin)
    {
        $admin->clearRuleAndMenu();
    }
}