@extends('layouts.app')

@section('title', 'login')

@section('content')
@csrf

<form action="login" method="post">
    <div class=textbox>
        <p name="usermail">E-Mail Address:</p>
        <input class="text" name="usermail" type="text">
    </div>
    <div class="textbox">
        <p name="password">password:</p>
        <input class="text" name="password" type="password">
    </div>

    <p class=""><input class="btn primary" type="submit" value="login"></p>

</form>
<a href="register">Forgot your password?</a>
@endsection
