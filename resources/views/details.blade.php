@extends('index')
@section('content')
    @if($post)
        <article>
            <h3 class="text-success text-capitalize">
                {{$post->title}}
            </h3>
            By: <a href="#{{$post->user->name}}">
                {{$post->user->name}}
            </a><br>
            <p>
                {{$post->content}}
            </p>
        </article>
    @endif
@endsection