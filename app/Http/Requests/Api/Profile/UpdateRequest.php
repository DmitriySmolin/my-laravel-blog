<?php

namespace App\Http\Requests\Api\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'gender' => 'int|nullable',
            'birthed_at' => 'date_format:Y-m-d|required',
            'avatar_path' => 'string|nullable',
            'is_active' => 'boolean|required',
            'first_name' => 'string|nullable',
            'second_name' => 'string|nullable',
            'third_name' => 'string|nullable',
            'login' => 'string|required'
        ];
    }
}
