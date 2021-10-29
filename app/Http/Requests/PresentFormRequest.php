<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PresentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'family_name' => ['required'],
            'given_name' => ['required'],
            'family_name_kana' => ['required'],
            'given_name_kana' => ['required'],
            'email' => ['required'],
            'secondary_email' => ['required'],
            'tel' => ['required'],
            'postal_code' => ['required'],
            'address' => ['required'],
            'present_id' => ['required'],
        ];
    }
}
