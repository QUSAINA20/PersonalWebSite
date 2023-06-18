<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceStore extends FormRequest
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
            'title'    =>'required|string|min:5|max:150' ,
            'date'     =>'required',
            'content'  =>'required|string|between:30,600'
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
