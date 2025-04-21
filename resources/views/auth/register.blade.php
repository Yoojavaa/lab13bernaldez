@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-light">
                <div class="card-body">
                    <h2 class="text-center mb-4">📝 Create an Account</h2>

                    <form method="POST" action="/register">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input name="name" type="text" id="name" class="form-control form-control-lg" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input name="email" type="email" id="email" class="form-control form-control-lg" placeholder="Enter email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" id="password" class="form-control form-control-lg" placeholder="Enter password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input name="password_confirmation" type="password" id="password_confirmation" class="form-control form-control-lg" placeholder="Re-enter password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">Register</button>
                        </div>
                    </form>

                    <div class="mt-3 text-center">
                        <a href="{{ route('login') }}" class="text-light">Already have an account? Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
