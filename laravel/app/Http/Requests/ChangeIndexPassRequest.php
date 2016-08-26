<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ChangeIndexPassRequest extends Request
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
            'password'=>'required',
            'renewpassword'=>'required|same:newpassword',
            'newpassword'=>'required'
        ];

    }

    public function messages(){
        return [

            'password.required'=>'原密码不能为空',
            'renewpassword.required'=>'重复密码不能为空',
            'newpassword.required'=>'新密码不能为空',
            'renewpassword.same'=>'两次密码必须一致'

        ];
        
    }
}
