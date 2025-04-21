@extends('layouts.app')

@section('content')
    <div class="card bg-dark text-light border-light mb-3 shadow-lg rounded-3">
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">{{ $post->body }}</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('posts.index') }}" class="btn btn-outline-light btn-lg">← Back</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-lg">Edit</a>
            <button class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light rounded-3 shadow-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this post? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection