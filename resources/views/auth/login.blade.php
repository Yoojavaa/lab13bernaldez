@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-light">
                <div class="card-body">
                    <h2 class="text-center mb-4">🔐 Login to Your Account</h2>

                    <form method="POST" action="/login">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input name="email" type="email" id="email" class="form-control form-control-lg" placeholder="Enter email" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" id="password" class="form-control form-control-lg" placeholder="Enter password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </form>

                    <div class="mt-3 text-center">
                        <a href="{{ route('register') }}" class="text-light">Don't have an account? Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
