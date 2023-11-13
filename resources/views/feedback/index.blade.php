@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center page-h">
        <div class="col-md-8">
@foreach($feedbacks as $feedback)
<div class="feedback-item col-md-12 col-sm-6 col-xs-3 mb-4">
    <div>
        <div>
            <div>
                <p class="auther_name">{{ $feedback->user->name }}</p>
                <div class="cat-date">
                    <span class="category">{{ $feedback->category }}</span>
                    <span class="category">{{ $feedback->created_at }}</span>
                </div>
            </div>   
            <a href="{{ url('post/'. $feedback->id) }}">
                
                <h5>{{ $feedback->title }}</h5>
            </a> 
            <p>{{ $feedback->description }}</p>
        </div>
        <p>Vote Count: {{ $feedback->vote_count }}</p>
            
        <p>Vote Count: {{ $feedback->Comment->count() }}</p>

    </div>
</div>
@endforeach
</div>
{{ $feedbacks->links() }} <!-- Add pagination links -->
</div>

 


</div >
@endsection