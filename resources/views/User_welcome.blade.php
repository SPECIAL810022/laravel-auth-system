<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f0f4f8, #cce1f5);
            color: #333;
            font-family: 'Arial', sans-serif;
        }
        .welcome-card {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: transform 0.2s;
        }
        .welcome-card:hover {
            transform: translateY(-5px);
        }
        h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
        }
        p.lead {
            font-size: 1.25rem;
            color: #555;
        }
        .user-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            display: block;
        }
        .btn-logout {
            background: #ff4b5c;
            border: none;
            font-size: 1rem;
            font-weight: bold;
        }
        .btn-logout:hover {
            background: #ff1e38;
        }
        footer {
            margin-top: 60px;
            text-align: center;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <div class="welcome-card">
            <!-- Display user's image if it exists -->
            @if(Auth::user()->image)
                <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="User Image" class="user-image">
            @else
                <!-- Placeholder if no image is available -->
                <img src="{{ asset('images/default-avatar.png') }}" alt="Default Avatar" class="user-image">
            @endif

            <h2>Welcome, {{ Auth::user()->name }}!</h2>          
            <p class="lead">You are successfully logged in.</p>
            <a href="{{ route('LogOut') }}" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
               class="btn btn-logout mt-3 px-4 py-2">Logout</a>
            
            <form id="logout-form" action="{{ route('LogOut') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
