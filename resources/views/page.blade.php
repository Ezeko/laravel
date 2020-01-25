@extends('blend')

@section('title', 'Home page')

@section('contents')



<body>

        <header>
        <form>
                <input type="text" name="title" placeholder="Your post's title">
            </form>
        </nav>
                @foreach($posts as $post)
                <div>
                    <ul>
                        <li>{{$post->title}}</li>
                        <p>{{$post->post}}</p>
                        <p>Posted By: {{$post->username}}</p>
                        <p>{{ $post->post_created_at->diffForHumans()  }}</p>
                        
                    </ul>
                </div>
                @endforeach

@endsection
