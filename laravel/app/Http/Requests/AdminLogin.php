<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminLogin extends Request
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
            'username'=>'required',
            'password'=>'required',
        ];
    }

    public function messages(){
        return [
            'username.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空'
        ];
    }
}
