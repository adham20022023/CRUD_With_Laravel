<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

                'title' =>'required|string|min:3|max:30',
                'description' =>'required|string|min:10|max:255',

        ];
    }
    public function messages(){
        return [
            'title.required'=>'watch Out Title is required',
            'description.required'=>'watch Out Description is required',
        ];
    }
}
