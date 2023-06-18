<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceUpdate extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'    =>'string|min:5|max:150' ,
            'date'     =>'string|date_format:d/m/Y',
            'content'  =>'string|between:30,600'
        ];
    }

    public function messages(){
        return [
             'title.required' => 'Title is required and must not be greater than 20 characters.' ,
             'date.required' => 'Date field is required!' ,
             'content.required' => 'Description field is required and must be between 30 and 600 characters.'

        ];
    }
}
