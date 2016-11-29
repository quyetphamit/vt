<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtUsername' => ['required', 'min:4', 'max:12', 'regex:/^([a-z]+)([a-zA-z0-9])$/', 'unique:vt_users,username'],
            'txtPassword' => 'required|min:6',
            'txtRepassword' => 'required|confirmed:txtUsername'
        ];
    }

    public function messages()
    {
        return [
            'txtUsername.required' => 'Tên đăng nhập không được để trống',
            'txtUsername.min' => 'Tên đăng nhập không được nhỏ hơn 4 ký tự',
            'txtUsername.max' => 'Tên đăng nhập không được vượt quá 12 ký tự',
            'txtUsername.regex' => 'Tên đăng nhập phải bắt đầu bằng chữ cái',
            'txtUsername.unique' => 'Tên đăng nhập đã tồn tại',
            'txtPassword.required' => 'Mật khẩu không được để trống',
            'txtRepassword.required' => 'Mật khẩu xác nhận không được để trống',
            'txtRepassword.confirmed' => 'Mật khẩu xác nhận không khớp',
            'txtRepassword.required'=>'Chưa nhập mật khẩu xác nhận'
        ];
    }
}
