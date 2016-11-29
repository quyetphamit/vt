<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
        $rule = [];
        $rule = [];
        if ($this->input('txtPassword')) {
            $rule = [
                'txtRepassword' => 'required'
            ];
        }
        if ($this->input('txtRepassword')) {
            $rule = [
                'txtPassword' => 'required'
            ];
        }
        if ($this->input('txtPassword') && $this->input('txtRepassword')) {
            $rule = [
                'txtRepassword' => 'same:txtPassword'
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'txtPassword.required' => 'Mật khẩu không được để trống',
            'txtRepassword.required' => 'Mật khẩu xác nhận không được để trống',
            'txtRepassword.same' => 'Mật khẩu xác nhận không khớp',
            'txtFullname.required' => 'Họ tên không được để trống'
        ];
    }
}
