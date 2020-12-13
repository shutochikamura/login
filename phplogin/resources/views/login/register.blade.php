@extends('layouts.app')

@section('title', 'register')

@section('header')
<a class="header-login-menu" href="login">Login</a>

<a class="header-login-menu" href="register">Register</a>
@endsection

@section('content')
<p>{{$msg}}</p>
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="register" method="post">
    @csrf
    <div class="textbox">
        <p name="name">Name:</p>
        <input class="text" name="name" type="text" value="{{old('name')}}">
    </div>
    <div class="textbox">
        <p name="usermail">E-Mail Address:</p>
        <input class="text" name="usermail" type="text" value="{{old('usermail')}}">
    </div>
    <div class="textbox">
        <p name="password">Password:</p>
        <input class="text" name="password" type="password">
    </div>
    <div class="textbox">
        <p name="password_confirm">Comfirm Password:</p>
        <input class="text" name="password_confirm" type="password">
    </div>
    <p>
        <input class="btn primary" type="submit" value="Register">
    </p>
</form>
<a href="login">ログイン画面に戻る</a>

@endsection
