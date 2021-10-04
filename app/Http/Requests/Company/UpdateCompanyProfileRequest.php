<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'website' => [
                'max:120'
            ],
            'facebook' => [
                'required',
                'max:120',
            ],
            'about_company' => [
                'max:10000'
            ],
            'photo' => [
                'required',
                'image', 
                'mimes:jpg,jpeg,png', 
                'max:1024',
            ],
        ];
    }
}
