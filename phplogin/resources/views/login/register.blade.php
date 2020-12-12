@extends('layouts.app')

@section('title', 'register')

@section('content')
@csrf
<form action="login" method="post">
    <div class="textbox">
        <p name="name">Name:</p>
        <input class="text" name="name" type="text">
    </div>
    <div class="textbox">
        <p name="usermail">E-Mail Address:</p>
        <input class="text" name="usermail" type="text">
    </div>
    <div class="textbox">
        <p name="password">Password:</p>
        <input class="text" name="password" type="password">
    </div>
    <div class="textbox">
        <p name="password">Comfirm Password:</p>
        <input class="text" name="password" type="password">
    </div>
    <p>
        <input class="btn primary" type="submit" value="Register">
    </p>
</form>
<a href="login">ログイン画面に戻る</a>

@endsection
