<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>WELCOME PAGE</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: black;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
            font-weight: 600;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
        }

        .btn-login {
            width: 100%;
            background: #007bff;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-login:hover {
            background: #0056b3;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            color: #d63384;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="card-body">
            <h2>WELCOME</h2>
            <a href="{{ route('login') }}" class="btn btn-login mt-3">Login</a>
            <a href="{{ route('register') }}" class="btn btn-login mt-3">Register</a>
        </div>
    </div>
    </div>
</body>

</html>
