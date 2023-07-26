@extends('layout.main')
@section('style')
    <style>
        .container-1{
            display: flex;
            flex-direction: row;
            width: 100vh;
            min-width: 100%;
            height: 100vh;
            background-color: antiquewhite;
        }
        .sidebar-1{
            width: 100%;
            background-color: bisque;
            display: flex;
            flex-direction: column;
            flex: 20%;
        }
        .middle-body{
            display: flex;
            flex: 80%;
            flex-direction: column;
        }
        .container-1 a{
            padding: 20px;
            display: block;
            border-radius:10%;
            text-decoration: unset;
            background-color: aqua;
        }
        .sidebar-1 a{
            margin: 20px;
            padding: 20px;
            display: block;
            border-radius:10%;
            text-decoration: unset;
            background-color: aqua;
        }
        .sidebar-1 a:hover{
            color: aliceblue;
            background-color: rgb(69, 94, 94);
        }
        .container-1 a:hover{
            color: aliceblue;
            background-color: rgb(69, 94, 94);
        }
    </style>
@endsection
@section('content')
    <div class="container-1">
        <div class="sidebar-1">
            @yield("sidebar")
        </div>
        <div class="middle-body">
            @yield('dashboard')
        </div>
    </div>

@endsection