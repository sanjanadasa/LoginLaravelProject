<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<ul class="sidebar">
<a href="/home" class="{{ Request::is('home')}}">
            <img src="{{ asset('image/line2.png') }}" alt="Home Icon" class="icon"> Home
        </a>
    </li>
    <a href="/usermenu" class="{{ Request::is('usermenu')}}">
            <img src="{{ asset('image/line2.png') }}" alt="usermenu Icon" class="icon"> Users Menu
        </a>
    </li>
    <a href="/service" class="{{ Request::is('service')}}">
            <img src="{{ asset('image/line2.png') }}" alt="service Icon" class="icon"> Services
        </a>
    </li>
    <a href="/about" class="{{ Request::is('about')}}">
            <img src="{{ asset('image/line2.png') }}" alt="about Icon" class="icon"> About
        </a>
    </li>
    <a href="/contact" class="{{ Request::is('contact')}}">
            <img src="{{ asset('image/line2.png') }}" alt="contact Icon" class="icon"> Contact
        </a>
    </li>
    <a href="{{ route('logout') }}">
            <img src="{{ asset('image/line2.png') }}" alt="logout Icon" class="icon"> Logout
        </a>
    </li>
</ul>
    </div>    
</body>
</html>
