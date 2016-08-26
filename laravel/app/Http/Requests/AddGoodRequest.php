<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddGoodRequest extends Request
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
            'title'=>'required|max:30',
            'cate_id'=>'required',
            'num'=>'required',
            'price'=>'required|numeric',
            'pic'=>'required',
            'editorValue'=>'required',

        ];
    }

    public function messages(){
        return [
            'title.required'=>'必须填写标题',
            'title.max'=>'字数超过限制',
            'cate_id.required'=>'请选择商品分类',
            'num.required'=>'数量必须填写',
            'price.required'=>'价格必须填写',
            'price.numeric'=>'价格必须为数字',
            'pic.required'=>'图片必须上传',
            'editorValue.required'=>'内容必须填写',
        ];
    }
}
