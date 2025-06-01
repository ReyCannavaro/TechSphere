<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pralogin - TechSphere</title>
    <link rel="stylesheet" href="{{ asset('css/pralogin.css') }}">
</head>

<body>
<nav class="navbar">
    <!-- Logo -->
    <div class="logo">TechSphere</div>

    <!-- Navigation Links -->
    <ul class="nav-links">
        <li><b><a href="{{ route('homepage') }}">Home</a></b></li>
        <li><b><a href="{{ route('login') }}">Gadgets</a></b></li>
        <li><b><a href="{{ route('login') }}">About</a></b></li>
    </ul>

    <!-- Search & Profile -->
    <div class="nav-icons">
        <form action="{{ route('login') }}" method="GET">
            <input type="text" name="query" class="search-bar" placeholder="Search something..">
        </form>

        <!-- Profile Icon -->
        <a href="{{ route('login') }}">
            <img src="{{ asset('pict/Account.png') }}" alt="Profile" style="height: 24px;">
        </a>
    </div>
</nav>

    <div class="slideshow-container">
        <div class="slide-wrapper slide1 active">
            <div class="slide-box">
                <img src="{{ asset('pict/THUMB_003-kv-galaxy-book5-pro-360-gray-main-us-OOH-1p 1.png') }}" class="slide"
                    width="130%" height="200%">
            </div>
        </div>
        <div class="slide-wrapper slide2">
            <div class="slide-box">
                <img src="{{ asset('pict/Apple-MacBook-Pro-M4-lineup_big.jpg.large 1.png') }}" class="slide" width="80%"
                    height="80%">
            </div>
        </div>
        <div class="slide-wrapper slide3">
            <div class="slide-box">
                <img src="{{ asset('pict/ip16.png') }}" class="slide" width="100%" height="80%">
            </div>
        </div>
        <a href="{{ route('login') }}" class="login-btn">Log In</a>
    </div>
    <script>
        let slides = document.querySelectorAll('.slide-wrapper');
        let currentIndex = 0;

        function showNextSlide() {
            slides[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.add('active');
        }
        setInterval(showNextSlide, 1400); // 800ms delay + 600ms transition
    </script>
</body>

</html>