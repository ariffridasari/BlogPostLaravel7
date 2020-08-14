@extends('layout.app')
@section('content')
<h1>Posts</h1><br>
    @if (count($posts)>0)
        @foreach ($posts as $post)
        <div class="list-group">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                    <small>Written on {{$post->created_at}} by  {{$post->user->name}}</small><br>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
    <p>No post Found</p>
@endif
@endsection