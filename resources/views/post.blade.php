@extends('blend')

@section('title', $post->title)

@section('contents')

                <div>
                    
                        <h1>{{$post->title}}</h1>
                        <h2>{{$post->post}}</h2>
                        <h3>Posted By: {{$post->username}}</h3>
                        <h6>{{ $post->post_created_at->diffForHumans()  }}</h6>
                        <a href="/posts"> Back</a>
                        <form method="get" action="/delete/{{$post->id}}">
                       
                        @method('DELETE')
                        {{ @csrf_field()}}
                        <button type="submit"> Delete Post </button>
                        </form>
                
                </div>
           

@endsection
