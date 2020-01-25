@extends('blend')

@section('title', 'Blog :: Ezekoconcept')

@section('contents')



<body>

        <header>
        <form method="POST" action="/create_post">
                <!--{{date_default_timezone_set('Africa/Lagos')}}-->
                <input type="text" name="title" placeholder="Your post's title">
                <textarea type="text" col="42" name="post" placeholder="Your post's content"></textarea>
                <input type="hidden" name="username" value="Emma">
                <input type="hidden" name="user_id" value="13">
                <input type="hidden" name="post_created_at" value="{{ now()}}">
                {{@csrf_field()}}
                <button>Create post</button>
            </form>
        </nav>
                @foreach($posts as $post)
                <div class="post">
                    <ul>
                        <li>{{$post->title}}</li>
                        <p>{{ $post->post_created_at->diffForHumans()  }}</p>
                        <a href="/post/{{$post->id}}">view</a>
                        
                    </ul>
                </div>
                @endforeach

@endsection
