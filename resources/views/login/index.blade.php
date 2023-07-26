@extends('layout.main')
@section('style')

@endsection
@section('content')
<div class="login-container">
    <h1>Login</h1>
    <h3 style="color: red">{{session('status')}}</h3>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input name="email" ="text" id="email" placeholder="Enter your email">
                </div>
                <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit" class="login-button">Login</button>
        </form>
    <p>Or login with:</p>
    <div class="social-buttons">
    <button class="login-button" style="background-color: #db4a39;">Google</button>
    <button class="login-button" style="background-color: #24292e;">GitHub</button>
    <button class="login-button" style="background-color: #3b5998;">Facebook</button>
    <button class="login-button" style="background-color: #1da1f2;">Twitter</button>
    </div>
    </div>
@endsection