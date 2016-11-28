<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @return string
     */
    public function getUserList()
    {
        $data = User::get()->toArray();
//        print_r($data);
        return view('admin.module.user.list', ['data' => $data]);
    }
}
