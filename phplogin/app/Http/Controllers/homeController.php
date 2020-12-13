<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use Validator;

class homeController extends Controller
{
    public function home()
    {
        return view('home.home');
    }
}
