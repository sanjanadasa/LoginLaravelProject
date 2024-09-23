<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <label for="email">Enter Email ID:</label>
            <input type="email" name="email" placeholder="Email" required>

            <label for="password">Enter Password:</label>
            <input type="password" name="password" minlength="8" pattern="[a-zA-Z ]+" title="Please enter only letters" placeholder="Password" required>

            <button type="submit">Login</button>
           
        </form></br></br>
        <a href="{{ route('register') }}">Don't have an account? Register</a>
    </div>
</body>
</html>
