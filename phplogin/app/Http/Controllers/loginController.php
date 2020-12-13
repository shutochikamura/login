<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use Validator;



class loginController extends Controller
{
    public function index()
    {

        return view('login.index',);
    }

    public function post(Request $request)
    {
        $rules = [
            'mail' => 'email',
            'password' => 'required|min:7',
        ];
        $messages = [
            'mail.email' => 'メールアドレスが必要です。',
            'password.required' => 'パスワードを整数で記入ください。',
            'password.min' => 'パスワードは7文字以上で記入ください。',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }
        return view('home.home', ['msg' => 'name']);
    }

    public function register()
    {

        return view('login.register', ['msg' => 'フォームを入力：']);
    }

    public function register_post(Request $request)
    {
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'password' => 'required|min:7',
            'password_confirm' => 'same:password',
        ];
        $messages = [
            'name.required' => 'お名前を入力下さい。',
            'mail.email' => 'メールアドレスが必要です。',
            'password.required' => 'パスワードは整数で記入ください。',
            'password.min' => 'パスワードは7文字以上で入力してください。',
            'password_confirm.same' => '同じパスワードを入力してください。'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        return view('home.home', ['msg' => $request->name]);
    }
}
