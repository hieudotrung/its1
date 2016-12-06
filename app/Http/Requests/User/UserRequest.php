<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|unique:users,username|max:255',
            'email' => 'email|required',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Vui lòng nhập tên đăng nhập',
            'username.unique' => 'Tên đăng nhập đã tồn tại, vui lòng thử lại',
            'username.max' => 'Tên đăng nhập không vượt quá 255 ký tự',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu phải có 6 ký tự',
            'email.email' => 'Email định dạng chưa chính xác, vui lòng nhập lại',
            'email.required' => 'Vui lòng nhập email'  
        ];
    }
}
