@extends('layout.dashboard')
@section('sidebar')
    <a href="#">Blog LIST</a>
    <a href="#">User LIST</a>
    <form action="#" method="post">
      <a href="#">Access LIST</a>
    </form>
@endsection
@section('dashboard')
<div style="display: flex;flex-direction:column">
  <div style="display:flex;">
    <div style="display: flex;flex-direction:column;flex:.5;margin-right:3px">
      <a style="background-color: brown;margin-bottom:3px;" href="http://">Name</a>
    </div>
    <div style="display: flex;flex-direction:column;flex:0.7;margin-right:3px">
      <a style="background-color: brown;margin-bottom:3px;" href="http://">UserName</a>
    </div>
    <div style="display: flex;flex-direction:column;flex:1;margin-right:3px">
      <a style="background-color: brown;margin-bottom:3px;" href="http://">Email</a>
    </div>
    <div style="display: flex;flex-direction:column;flex:0.5;margin-right:3px">
      <a style="background-color: brown;margin-bottom:3px;" href="http://">Role</a>
    </div>
    <div style="display: flex;flex-direction:column;flex:1;margin-right:3px">
      <a style="background-color: brown;margin-bottom:3px;" href="http://">Action</a>
    </div>
  </div>
  @foreach ($users as $user)
  <div style="display:flex;flex-direction:column;">
    <div style="display: flex;margin-bottom:3px;">
      <div style="display: flex;flex-direction:column;flex:.5;margin-right:3px">
        <a href="http://">{{ $user->name }}</a>
      </div>
      <div style="display: flex;flex-direction:column;flex:0.7;margin-right:3px">
        <a href="http://">{{$user->username}}</a>
      </div>
      <div style="display: flex;flex-direction:column;flex:1;margin-right:3px">
        <a href="http://">{{$user->email}}</a>
      </div>
      <div style="display: flex;flex-direction:column;flex:0.5;margin-right:3px">
        <a href="http://">{{$user->role}}</a>
      </div>
      <div style="display: flex;flex-direction:column;flex:1;margin-right:3px">
        <a href="http://">action</a>
      </div>
    </div>
  @endforeach
</div>


@endsection