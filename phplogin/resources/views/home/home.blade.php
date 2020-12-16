@extends('layouts.app')

@section('title', 'Dashboard')

@section('header')


<input type="checkbox" id="menu-bar" class="accordion">
<label class="menu-label" for="menu-bar">{{$name}}</label>
<div class="header-sub-menu">

    <a href="login">
        <p>logout</p>
    </a>

</div>





@endsection

@section('content')
<h2>You are Logged in!</h2>



@endsection
