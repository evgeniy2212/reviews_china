<?php

namespace App\Http\Requests\Chat;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class SendContactMailRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email'   => [
                'string',
                Rule::exists('users', 'email')
                    ->whereNotNull('email_verified_at')
            ]
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email' => '請輸入正確的郵箱！',
        ];
    }
}
