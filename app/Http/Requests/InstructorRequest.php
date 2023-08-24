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
            'name'=>'required|max:40|min:4|string',
            'address'=>'required|max:255|min:3',
            'salary'=>'required',
            'hourRate'=>'numeric|required',
            'department_id'=>'numeric|required',
            // 'course_id'=>'numeric',
            // 'evaluation'=>'string|min:4|max:15'

        ];
    }
}
