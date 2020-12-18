<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;







class loginController extends Controller
{
    public function index()
    {

        return view('login.index',);
    }



    public function register()
    {

        return view('login.register',);
    }

    public function post(loginRequest $request)
    {

        return view('home.home', ['name' => $request->name]);
    }
}
