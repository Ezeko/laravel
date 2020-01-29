
 @extends('blend')

@section('title', $post->title)

@section('contents')

    
                    
                <div id="form">
        <form method="POST" action="/update/{{$post->id}}">
                <!--{{date_default_timezone_set('Africa/Lagos')}}-->
                <input type="text" name="title" value="{{$post->title}}">
                <input type="text" col="42" name="post" value="{{$post->post}}">
                <input type="hidden" name="username" value="{{$post->username}}">
                <input type="hidden" name="user_id" value="{{$post->user_id}}">
                <input type="hidden" name="updated_at" value="{{ now()}}">
                @method('PUT')
                {{@csrf_field()}}
                <button type="submit">Edit post</button>
            </form>
            <hr />
                
                </div>
           

@endsection

            