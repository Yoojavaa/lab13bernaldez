@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-light border-light shadow-lg rounded-3">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection