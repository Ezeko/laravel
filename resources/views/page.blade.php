@extends('blend')

@section('title', 'Blog :: Ezekoconcept')

@section('contents')



<body>

        <header>
        <form>
                <input type="text" name="title" placeholder="Your post's title">
                <textarea type="text" col="42" name="post" placeholder="Your post's content"></textarea>
                <input type="hidden" name="username" value="Ezeko">
                <input type="hidden" name="post_created_at" value="{{ now()}}">
                {{@csrf_field()}}
                <button>Create post</button>
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
