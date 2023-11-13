@extends('layouts.app')

@section('content')
    <!-- Details blog page -->
    <!-- including Auther name , post/blog title , description , blog date , total vote and comments details -->
    <div class="container">
        <h1>{{ $feedback->title }}</h1>
        <p><strong>Category: </strong> {{$feedback->category}}</p>
        <article>
            {!! $feedback->description !!}
        </article>
  <hr />
  <small>Written on {{$feedback->created_at}} by {{$feedback->user->name}}</small>
  <br>
  <a href="/" class="btn btn-default">Go Back</a>
 
</div>
<hr/>
<!-- Comment section -->
<div class="card card-block">
    <h4 class="card-header">Comments</h4>
    <form method="post" action="{{ route('comment.store') }}">
    @csrf
      
      <div class="form-group">
        <input type="hidden" value="{{$feedback->id}}" name="feed_id">
        <textarea name="content" placeholder="Your comment here." class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>




    <div class="comments">
      
         @foreach ($feedback->Comment as $comment)
         <div class="card m-2">
         <div class="media-body">
               
                <p class="mt-2 mb-3">{{$comment->content}}</p>
                <ul class="list-inline text-muted">
                    <li><small> {{$comment->created_at}} by {{$comment->user->name}}</small></li>
                </ul>
            </div>
        </div>
     
        @endforeach
    </div>
    </div>
<br />
 


    
@endsection