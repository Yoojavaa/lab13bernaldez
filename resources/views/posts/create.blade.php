@extends('layouts.app')

@section('content')
    <div class="card bg-dark text-light border-light mb-3 shadow-lg rounded-3">
        <div class="card-body">
            <h2 class="card-title">Create New Post</h2>
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Create Post</button>
            </form>
        </div>
    </div>
@endsection