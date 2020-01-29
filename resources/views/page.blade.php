@extends('blend')

@section('title', 'Blog :: Ezekoconcept')

@section('contents')



<body>

        <div id="form">
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
            <hr />
</div>
                @foreach($posts as $post)
                <div class="post">
                    <div id="pos">
                        <h1><strong>{{$post->title}}</strong></h1>
                        <h6>{{ $post->created_at->diffForHumans()  }}</h6>
                        <a href="/post/{{$post->id}}">view</a> 
                        <p><a href="/likes/{{$post->id}}"> 👍 </a>
                             @if(($post->likes)> 0) 
                                {{$post->likes}}
                            @endif
                            
                        </p>
                        
                    </div>
                </div>
                @endforeach

@endsection
