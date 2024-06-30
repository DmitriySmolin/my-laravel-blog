<?php

namespace App\Http\Requests\Api\Profile;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'birthed_at' => 'required|date_format:Y-m-d',
            'avatar_path' => 'string|nullable',
            'is_active' => 'boolean|required',
            'first_name' => 'string|nullable',
            'second_name' => 'string|nullable',
            'third_name' => 'string|nullable',
            'login' => 'string|required|unique:profiles, login' . $this->profile->id
        ];
    }
}
