<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required|string|min:3|max:50',
            'desc'=>'required|string|min:3|max:500',
            'S_price'=>'required|numeric',
            'M_price'=>'required|numeric',
            'L_price'=>'required|numeric',
            'category'=>'required',
            'image'=>'mimes:png,jpg,svg,jpeg'
        ];
    }
}
