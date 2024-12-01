<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Afifah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f95353;
            font-family: Arial, sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .brand {
            text-align: center;
            margin-bottom: 20px;
        }
        .brand img {
            max-width: 80px;
        }
        .brand h2 {
            color: #f95353;
            margin-top: 10px;
        }
        .btn-login {
            background-color: #f95353;
            color: white;
        }
        .btn-login:hover {
            background-color: #d44242;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="brand">
                <img src="https://via.placeholder.com/80" alt="Afifah Logo">
                <h2>Afifah</h2>
            </div>
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">No. Handphone/Username/Email</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-login w-100">Log In</button>
                <div class="text-center mt-3">
                    <a href="#" class="text-muted">Lupa Password?</a>
                </div>
                <hr>
                <div class="text-center">
                    <button type="button" class="btn btn-light w-100 mb-2">Log in dengan Facebook</button>
                    <button type="button" class="btn btn-light w-100">Log in dengan Google</button>
                </div>
                <div class="text-center mt-3">
                    Baru di Afifah? <a href="/register" class="text-primary">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
