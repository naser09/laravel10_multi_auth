@props(['blog'])
<div class="card-container" style="margin-top: 10pt;margin:8pt">
    <div class="card">
        <h2 class="title">{{$blog->title}}</h2>
        <div class="post-info">
          <span class="user">Posted by  {{$blog->user->name}}</span>
          <span class="post-time"> at {{ $blog->created_at }}</span>
          <span class="post-time">edited at {{ $blog->updated_at->diffForHumans() }}</span>
        </div>
        <p class="blog-post">
            {{ $blog->blog }}
          </p>
    </div>

    <div class="buttons">
      <form action="{{route('blog.edit',$blog )}}">
      <button type="submit" class="edit-button">Edit</button>
      </form>
      <button class="delete-button">Delete</button>
      <button class="update-button">Update</button>
    </div>
  </div>