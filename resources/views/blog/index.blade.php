@extends('layout.main')
@section('style')
    <link rel="stylesheet" href="{{asset('css/cardstyle.css')}}">
@endsection
@section('content')

<form action="{{route('blog')}}" method="post">
    <input type="hidden" name="id" value="{{session('id')}}">
    @csrf
    <div class="form-container">
        <input type="text" name="title" class="input-field" placeholder="Enter your text here" value="{{session('title')}}">
        <textarea class="textarea-field" name="blog" style="min-height: 15vh" placeholder="Enter your textarea content here" >{{session('blog')}}</textarea>
        @if (session('id'))
        <button class="submit-button" type="submit">Update</button>
        @else
        <button class="submit-button" type="submit">Submit</button>
        @endif
    </div>
</form>

<div style="display: flex; flex-wrap:wrap;justify-content:center;"> 
@foreach ($blogs as $blog)

    <x-Blog-card :blog=$blog />
    {{-- <div>
        <h2>{{ $blog->user->name}}</h2>
        <h1>
            {{ $blog->title }}
        </h1>
        <pre>
            {{$blog->blog}}
        </pre>
        <form action="{{ route('blog.destroy',$blog)}}" method="post">
            @csrf
            @method('delete')
        <button type="submit">Delete</button>
        </form>

        <form action="{{ route('blog.edit',$blog)}}" method="get">
        <button type="submit">Edit</button>
        </form>
    </div> --}}
@endforeach
</div>
{{ $blogs->links() }}
@endsection