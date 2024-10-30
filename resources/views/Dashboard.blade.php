<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e2edff, #cfd8e9);
            font-family: Arial, sans-serif;
            color: #333;
        }
        .welcome-container {
            max-width: 600px;
            margin: 100px auto;
            padding: 40px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
        }
        p.lead {
            font-size: 1.25rem;
            color: #555;
            margin-bottom: 30px;
        }
        .btn-primary, .btn-secondary {
            font-size: 1.1rem;
            font-weight: bold;
            padding: 12px 24px;
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #545b62;
        }
    </style>
</head>
<body>

    <div class="container welcome-container">
        <h1>Welcome to Our Application</h1>
        <p class="lead">Please register or log in to continue.</p>

        <a href="{{ route('register') }}" class="btn btn-primary btn-lg me-3">Register</a>
        <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Login</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
