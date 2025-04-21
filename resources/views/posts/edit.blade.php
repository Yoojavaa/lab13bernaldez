@extends('layouts.app')

@section('content')
    <div class="card bg-dark text-light border-light mb-3 shadow-lg rounded-3">
        <div class="card-body">
            <h2 class="card-title">Edit Post</h2>
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required>{{ $post->body }}</textarea>
                </div>
                <button type="submit" class="btn btn-warning btn-lg">Update Post</button>
            </form>
        </div>
    </div>
@endsection