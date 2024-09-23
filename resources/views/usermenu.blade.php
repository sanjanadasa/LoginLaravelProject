
<!DOCTYPE html>
<html>
<head>
    <title>User Menu Page</title>
    <link rel="stylesheet" href="{{ asset('css/styless.css') }}">
</head>
<body>
@include('home') 
<div class="container">
    @if($users->count() > 0)
        @foreach($users as $user)
            <div class="card-container">
                <div class="upper-container">
                    <div class="image-container">
                    <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Picture">
                    </div>
                </div>
                <div class="lower-container">
                    <div>
                        <h3>{{ $user->id }} : {{ $user->name }}</h3>
                        <h4>Email: {{ $user->email }}</h4>
                    </div>
                    <div>
                        <a href="#" class="btn">View profile</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No records found.</p>
    @endif
</div>
</body>
</html>
