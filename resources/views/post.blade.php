@extends('blend')

@section('title', $post->title)

@section('contents')


                <div>
                    <ul>
                        <li>{{$post->title}}</li>
                        <p>{{$post->post}}</p>
                        <p>Posted By: {{$post->username}}</p>
                        <p>{{ $post->post_created_at->diffForHumans()  }}</p>
                        
                    </ul>
                </div>
           

@endsection
