@extends('index')
@section('content')
<div class="cols-md-7">


    <table class="table table-striped">
        <thead class="text_info">
        <th>User</th>
        <th>Post ID</th>
        <th>Post Title</th>
        <th>Post Created</th>
        <th>Post Updated</th>
        <th colspan="3" class="text-center">Action</th>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->user->name}}</td>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td><a class="btn btn-success"
                   href="{{route('post.details', ['id'=>$post->id,'title'=>$post->title])}}"
                   data-toggle="tooltip" data-placement="top"
                   title="
                    {{strlen($post->content)>50     ? substr($post->content, 0, 50).'...':$post->content}}">View</a></td>
            <td><a class=" btn btn-warning"href="{{route('post.edit',$post->id)}}">Edit</a></td>
            <td><a class="btn btn-danger"href="{{route('post.delete',$post->id)}}">Delete</a></td>

        </tr>
        @endforeach
        </tbody>

    </table>
</div>
@endsection