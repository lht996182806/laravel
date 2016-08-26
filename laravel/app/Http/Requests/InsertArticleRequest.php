<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsertArticleRequest extends Request
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
            'title'=>'required',
            'descr'=>'required',
            'editorValue'=>'required',
            // 'pic'=>'required'
        ];
    }

    public function messages(){
        return [
            'title.required'=>'标题不能为空',
            'descr.required'=>'简介不能为空',
            'editorValue.required'=>'内容不能为空',
            'pic.required'=>'图片不能为空'
        ];
    }
}
