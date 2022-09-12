<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
            'frist_name' => 'nullable',
            'last_name' => 'nullable',
            'email' => 'nullable',
            'address' => 'nullable',
            'phone_number' => 'nullable',
        ];
    }
}