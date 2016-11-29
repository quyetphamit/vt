<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAddRequest;
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

    }
}
