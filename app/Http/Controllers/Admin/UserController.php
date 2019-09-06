<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UserRequest;
use App\Models\User;

class UserController extends BaseController
{
    public function index(User $user){
        $users = $user->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create(){
        return view('admin.user.create');
    }

    /**
     * 保存
     *
     * @param UserRequest $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request , User $user){
        $user->fill($request->all());

        $user->save();

        flash('添加客户成功')->success()->important();

        return redirect()->route('user.index');
    }

    /**
     * @param Role $role
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        return $this->view('edit', compact('user'));
    }


    /**
     * 修改
     *
     * @param RoleRequest $request
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());

        flash('修改成功')->success()->important();

        return redirect()->route('user.index');
    }

    /**
     * 删除
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user){
        $user->delete();

        flash('删除成功')->success()->important();

        return redirect()->route('user.index');
    }
}
