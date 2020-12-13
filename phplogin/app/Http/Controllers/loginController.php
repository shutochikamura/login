<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use Validator;

class loginController extends Controller
{
    public function index()
    {

        return view('login.index', ['msg' => 'フォームを入力：']);
    }
    public function post(Request $request)
    {
        $rules = [
            'usermail' => 'email',
            'password' => 'required|min:7',
        ];
        $messages = [
            'usermail.email' => 'メールアドレスが必要です。',
            'password.required' => 'パスワードを整数で記入ください。',
            'password.min' => 'パスワードは7文字以上で記入ください。',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }

        return view('home.home', ['msg' => '田中']);
    }

    public function register()
    {

        return view('login.register', ['msg' => 'フォームを入力：']);
    }
    public function register_post(loginRequest $request)
    {

        return view('login.register', ['msg' => '正しく入力されました。']);
    }

    public function home()
    {

        return view('home.home');
    }
}
