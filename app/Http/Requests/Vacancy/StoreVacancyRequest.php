<?php

namespace App\Http\Requests\Vacancy;

use Illuminate\Foundation\Http\FormRequest;

class StoreVacancyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'order_id' => [
                'max:30'
            ],
            'name' => [
                'required', 
                'max:200'
            ],
            'education' => [
                'required', 
                'max:200'
            ],
            'salary' => [
                'nullable',
            ],
            'work_schedule' => [
                'required', 
                'max:50'
            ],
            'job_description' => [
                'required',
                'max:10000'
            ],
            'qualification_requirements' => [
                'required',
                'max:10000'
            ],
            'vacancy_type' => [
                'required',
            ],
            'category_id' => [
                'required',
                'numeric'
            ],
            'experience_id' => [
                'required',
                'numeric'
            ],
            'language_id' => [
                'required',
                'numeric'
            ],
            'location_id' => [
                'required',
                'numeric'
            ],
        ];
    }
}
