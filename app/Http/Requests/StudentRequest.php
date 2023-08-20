<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'id'=>'unique:students',
             'fname'=>'required|alpha|min:3|max:50',
             'lname'=>'required|alpha|min:3|max:50',
             'age'=>'required|digits:2',
             'address'=>'alpha|max:255'

        ];
    }
}
