<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GoodsDetailsRequest extends Request
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
            'size'=>'required',
            'color'=>'required',
        ];
    }

    public function messages(){
        return [
            'size.required'=>'型号必须选择',
            'color.required'=>'颜色必须填写',
        ];
    }
}
