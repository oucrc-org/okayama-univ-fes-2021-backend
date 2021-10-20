<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class SaveTweetRequest extends FormRequest
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
            'id' => 'required|unique:posts|max:255',
            'twitter_id' => 'required|max:255',
            'avatar_url' => 'required|url|max:255',
            'display_name' => 'required|max:255',
            'comment' => 'required|max:255',
            'tweet_url' => 'required|url|max:255',
        ];
    }

    public function failedValidation(Validator $validator): JsonResponse
    {
        throw new HttpResponseException(
            response()->json(['success' => false, 'error' => $validator->errors()->toArray()], 422)
        );
    }
}
