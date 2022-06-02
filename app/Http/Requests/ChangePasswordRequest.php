<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'current-password' => ['required'],
            'new-password' => ['required', 'string', 'min:6','regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/']
        ];
    }

    public function attributes()
    {
        return [
            'current-password' => '當前密碼',
            'new-password' => '新密碼'
        ];
    }
}
