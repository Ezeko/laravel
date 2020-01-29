@extends('blend')

@section('title', $post->title)

@section('contents')

                <div>
                    <!--{{date_default_timezone_set('Africa/Lagos')}}-->
                        <h1><strong>{{$post->title}}<strong></h1>
                        <h2>{{$post->post}}</h2>
                        <h3>Posted By: {{$post->username}}</h3>
                        <h6>{{ $post->post_created_at->diffForHumans()  }}</h6>
                        <a href="/posts"> Back</a> <a href="/edit/{{$post->id}}">Update Post</a> 
                        <a href="#"> ❤ </a>
                        <form method="get" action="/delete/{{$post->id}}">
                       
                        @method('DELETE')
                        {{ @csrf_field()}}
                        <button type="submit"> Delete Post </button>
                        </form>
                        
                
                </div>
           

@endsection
