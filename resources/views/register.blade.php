<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger fixed-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div>
        <h1>Register</h1>
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Enter Name:</label>
            <input type="text" name="name" placeholder="Name"  pattern="[a-zA-Z ]+" title="Please enter only letters" required>

            <label for="email">Enter Email ID:</label>
            <input type="email" name="email" placeholder="Email" required>

            <label for="password">Enter Password:</label>
            <input type="password" name="password" minlength="8" pattern="[a-zA-Z ]+" title="Please enter only letters" placeholder="Password" required>

            <label for="password">Enter Confirm Password:</label>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

            <div class="form-group">
             <label for="profile_picture">Profile Picture:</label>
             <input type="file" name="profile_picture" class="form-control" accept="image/*" required>
          </div>


            <button type="submit">Register</button>
        </form></br></br>
        <a href="{{ route('login') }}">Already have an account? Login</a>
    </div>
</body>
</html>
