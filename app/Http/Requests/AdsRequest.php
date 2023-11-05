<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Failed validation disable redirect
     *
     * @param Validator $validator
     */

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 400));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'exists:App\Models\User,id'],
            'town_id' => ['required','exists:App\Models\Town,id'],
            'category_id' => ['required','exists:App\Models\AnnouncementCategory,id'],
            'type' => ['required', 'boolean'],
            'title' => ['required', 'string', 'min:10', 'max:30'],
            'description' => ['required', 'string', 'min:30', 'max:100'],
        ];
    }
}
