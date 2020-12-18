<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

class loginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'register') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'password' => 'required|min:7',
            'password_confirm' => 'same:password',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'お名前を入力下さい。',
            'mail.email' => 'メールアドレスが必要です。',
            'password.required' => 'パスワードは整数で記入ください。',
            'password.min' => 'パスワードは7文字以上で入力してください。',
            'password_confirm.same' => '同じパスワードを入力してください。'
        ];
    }
}
