@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0) 
            @foreach ($posts as $post)
                <div class="card padding p-3">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written at {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
                </div>
            @endforeach
            {{$posts->links()}}
    @else
        <p>No potsts found</p>
    @endif
@endsection