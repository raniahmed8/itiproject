<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorRequest extends FormRequest
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
            'id'=>'numeric|required',
            'name'=>'required|max:40|min:2|string',
            'duration'=>'max:40|min:2|string',
            'discribtion'=>'max:40|min:2|string',
           
        ];
    }
}
