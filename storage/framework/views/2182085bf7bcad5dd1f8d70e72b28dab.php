<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pralogin - TechSphere</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
        }

        /* Logo */
        .logo {
            padding-left: 50px;
            font-family: 'Kalnia';
            font-size: 28px;
            font-weight: bold;
        }

        /* Navigation Links */
        .nav-links {
            font-family: 'Calibri';
            list-style: none;
            display: flex;
            right: 100px;
        }

        .nav-links li {
            display: inline;
        }

        .nav-links a {
            text-decoration: none;
            color: black;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: black;
        }

        /* Icons & Search Bar */
        .nav-icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-bar {
            margin-right: 30px;
            padding: 10px 40px;
            border: 1px;
            border-radius: 20px;
            outline: none;
            background-color: #d9d9d9;
        }

        .nav-icons img {
            width: 24px;
            height: 24px;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #f5f5f5;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 50px;
        }

        .nav-links li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .search input {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .icons img {
            width: 25px;
            margin-left: 25px;
        }

        .slideshow-container {
            position: relative;
            width: 90vw;
            height: 80vh;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin-top: 5px;
        }

        .slide-wrapper {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.6s ease-in-out;
        }

        .slide-wrapper.active {
            opacity: 1;
        }

        .slide1 {
            background: #f5f5f5;
        }

        .slide2 {
            background: black;
        }

        .slide2 img {
            padding-left: 100px;
        }

        .slide3 {
            background: linear-gradient(to bottom, #424A6A, #8E9FBC);
        }

        .slide-box img {
            object-fit: contain;
        }

        .login-btn {
            text-decoration: none;
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translateX(-50%);
            padding: 10px 70px;
            font-weight: 600;
            background-color: white;
            color: black;
            border: none;
            cursor: pointer;
            border-radius: 50px;
        }
    </style>
</head>

<body>
<nav class="navbar">
    <!-- Logo -->
    <div class="logo">TechSphere</div>

    <!-- Navigation Links -->
    <ul class="nav-links">
        <li><b><a href="<?php echo e(route('homepage')); ?>">Home</a></b></li>
        <li><b><a href="<?php echo e(route('login')); ?>">Gadgets</a></b></li>
        <li><b><a href="<?php echo e(route('login')); ?>">About</a></b></li>
    </ul>

    <!-- Search & Profile -->
    <div class="nav-icons">
        <form action="<?php echo e(route('login')); ?>" method="GET">
            <input type="text" name="query" class="search-bar" placeholder="Search something..">
        </form>

        <!-- Profile Icon -->
        <a href="<?php echo e(route('login')); ?>">
            <img src="<?php echo e(asset('pict/Account.png')); ?>" alt="Profile" style="height: 24px;">
        </a>
    </div>
</nav>

    <div class="slideshow-container">
        <div class="slide-wrapper slide1 active">
            <div class="slide-box">
                <img src="<?php echo e(asset('pict/THUMB_003-kv-galaxy-book5-pro-360-gray-main-us-OOH-1p 1.png')); ?>" class="slide"
                    width="130%" height="200%">
            </div>
        </div>
        <div class="slide-wrapper slide2">
            <div class="slide-box">
                <img src="<?php echo e(asset('pict/Apple-MacBook-Pro-M4-lineup_big.jpg.large 1.png')); ?>" class="slide" width="80%"
                    height="80%">
            </div>
        </div>
        <div class="slide-wrapper slide3">
            <div class="slide-box">
                <img src="<?php echo e(asset('pict/ip16.png')); ?>" class="slide" width="100%" height="80%">
            </div>
        </div>
        <a href="<?php echo e(route('login')); ?>" class="login-btn">Log In</a>
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

</html><?php /**PATH /home/reycannavaro/TechSphere/resources/views/pralogin.blade.php ENDPATH**/ ?>