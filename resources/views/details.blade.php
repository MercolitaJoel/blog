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
            <div>

            </div>
        @foreach($post->comments as $comment)
            <div class="section">
                <blockquote>{{$comment->user->name}}</blockquote>
                <p>{{$comment->text}}</p>
                <span class="badge">{{$comment->created_at}}</span>
            </div>
        @endforeach
        <form class="form" action="{{route('/post/comment',['user_id'=>Auth::user()->id, 'post_id'])}}">
            @csrf
            <textarea name="text" multiline required>

            </textarea><br>
            <input id="submit" type="submit" class="btn btn-secondary" value="Comment" />
        </form>
    @endif
@endsection