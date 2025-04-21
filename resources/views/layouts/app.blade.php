<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/darkly/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('https://via.placeholder.com/1500x800') no-repeat center center fixed;
            background-size: cover;
            color: #f0f0f0;
            font-family: 'Roboto', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }
        .navbar {
            background: linear-gradient(135deg, #5f2c82, #49a09d);
        }
        .btn:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        .card-body {
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 10px;
        }
        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        .modal-content {
            border-radius: 10px;
        }
        .btn-lg {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">📝 BlogApp</a>
            <div class="d-flex align-items-center gap-2">
    <a class="btn btn-outline-light" href="{{ route('posts.create') }}">+ New Post</a>

    @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    @endauth

    @guest
        <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
    @endguest
</div>
        </div>
    </nav>

    <div class="container my-5">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>