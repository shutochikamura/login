@extends('layouts.app')

@section('title', 'login')

@section('header')
<a class="header-login-menu" href="login">Login</a>

<a class="header-login-menu" href="register">Register</a>
@endsection

@section('content')

@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="login" method="post">
    @csrf
    <div class=textbox>
        <p name="mail">E-Mail Address:</p>
        <input class="text" name="mail" type="text" value="{{old('mail')}}">
    </div>
    <div class="textbox">
        <p name="password">password:</p>
        <input class="text" name="password" type="password">
    </div>

    <p class=""><input class="btn primary" type="submit" value="login"></p>

</form>
<a href="register">Forgot your password?</a>
@endsection
