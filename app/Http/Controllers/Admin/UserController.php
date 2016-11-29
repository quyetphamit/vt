<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * @return string
     */
    public function getUserList()
    {
        $currId = Auth::user()->id;
        $user = User::findOrFail($currId);
        if ($user['level'] == 0) {
            $data = User::get();
        }
        if ($user['level'] == 1) {
            $data = User::where('level', '>=', 1)->get();
        }
        return view('admin.module.user.list', ['data' => $data]);
    }

    public function getUserAdd()
    {
        return view('admin.module.user.add');
    }

    public function postUserAdd(UserAddRequest $request)
    {
        $user = new User();
        $user->username = $request->input('txtUsername');
        $user->password = bcrypt($request->input('txtPassword'));
        $user->fullname = $request->input('txtFullname');
        $user->level = $request->input('rdoLevel');
        $user->save();
        return redirect()->route('getUserList')->with(['flash_level' => 'alert alert-success', 'flash_message' => 'Thêm tài khoản thành công']);

    }

    public function getUserEdit($id)
    {
        $data = User::findOrFail($id);
        $currId = Auth::user()->id;
        $currLevel = Auth::user()->level;
        if (($currLevel == 0 && $data['id'] == $currId) || ($currLevel == 0 && $data['level'] != 0) || ($currLevel == 1 && $data['id'] == $currId) || ($currLevel == 1 && $data['level'] != 1)) {
            return view('admin.module.user.edit', ['data' => $data, 'currLevel' => $currLevel]);
        } else {
            return redirect()->route('getUserList')->with(['flash_level' => 'alert alert-danger', 'flash_message' => 'Bạn không có quyền sửa tài khoản này']);
        }

    }

    public function postUserEdit($id, UserEditRequest $request)
    {

    }
}
