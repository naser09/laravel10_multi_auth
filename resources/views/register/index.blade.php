@extends('layout.main')
@section('content')
<div class="login-container">
    <h1>Register a new account</h1>
    <h3 style="color: red">
        {{
            session('status')
        }}
    </h3>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="name">Your name</label>
                <input name="name" ="text" id="name" placeholder="Enter your name">
                @error('name')
                <span style="color: red">{{$message}}</span>

                @enderror
                </div>

            <div class="input-group">
                <label for="username">Your username</label>
                <input name="username" ="text" id="username" placeholder="Enter your username">
                @error('username')
                <span style="color: red">{{$message}}</span>
            @enderror
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input name="email" ="text" id="email" placeholder="Enter your email">
                    @error('email')
                    <span style="color: red">{{$message}}</span>

                @enderror
                    </div>
                <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">
                @error('password')
                <span style="color: red">{{$message}}</span>
            @enderror
                </div>

                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
                    </div>
                <button type="submit" class="login-button">Register</button>
        </form>
@endsection