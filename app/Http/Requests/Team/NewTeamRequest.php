<?php

namespace App\Http\Requests\Team;

use Illuminate\Foundation\Http\FormRequest;

class NewTeamRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'unique:teams',
                'max:150'

            ],

            'logo' => [
                'nullable',
                'file',
                'image',
                'mimes:jpg,png,jpeg,gif,svg',
                'dimensions:min_width=100,min_height=40,max_width=1000,max_height=400',
                'max:1024'
            ],
        ];
    }
}
