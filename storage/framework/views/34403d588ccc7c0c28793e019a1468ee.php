<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .main-product {
            color: white;
            position: relative;
            height: 210px;
            padding: 20px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 80%;
            border-radius: 25px;
            background: linear-gradient(to left, #737373, #d9d9d9);
        }

        /* Ganjil: Nama di kiri, gambar di kanan */
        .main-product:nth-child(odd) {
            flex-direction: row;
        }

        /* Genap: Nama di kanan, gambar di kiri */
        .main-product:nth-child(even) {
            flex-direction: row-reverse;
        }

        .product-name {
            font-family: 'Calibri';
            font-size: 32px;
            font-weight: bold;
            flex: 1;
            text-align: left;
        }

        /* Nama produk di sebelah kanan untuk produk genap */
        .main-product:nth-child(even) .product-name {
            text-align: right;
        }

        .product-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-image img {
            max-width: 100%;
            transform: scale(1.3);
        }

        .detail-link {
            position: absolute;
            bottom: 10px;
            /* Menempatkan tombol di bawah */
            left: 50%;
            transform: translateX(-50%);
            text-decoration: none;
            color: black;
            background-color: white;
            border-radius: 25px;
            padding: 8px 30px;
            font-weight: 300;
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .main-product:hover .detail-link {
            opacity: 1;
            transform: translateX(-50%) translateY(-5px);
        }

        .rekomendasi {
            text-align: center;
            padding: 20px;
        }

        .produk-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            overflow-x: auto;
            padding-bottom: 20px;
        }

        .produk {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            position: relative;
        }

        .produk img {
            width: 200px;
            height: auto;
        }

        .lihat-detail {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: black;
            font-weight: bold;
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .produk:hover .lihat-detail {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
<nav class="navbar">
    <!-- Logo -->
    <div class="logo">TechSphere</div>

    <!-- Navigation Links -->
    <ul class="nav-links">
        <li><b><a href="<?php echo e(route('user.homepage')); ?>">Home</a></b></li>
        <li><b><a href="<?php echo e(route('user.gadgets')); ?>">Gadgets</a></b></li>
        <li><b><a href="<?php echo e(route('user.about')); ?>">About</a></b></li>
    </ul>

    <!-- Search & Profile -->
    <div class="nav-icons">
        <form action="<?php echo e(route('user.profile')); ?>" method="GET">
            <input type="text" name="query" class="search-bar" placeholder="Search something..">
        </form>

        <!-- Profile Icon -->
        <a href="<?php echo e(route('user.profile')); ?>">
            <img src="<?php echo e(asset('pict/Account.png')); ?>" alt="Profile" style="height: 24px;">
        </a>
    </div>
</nav>

    <?php $__currentLoopData = $gadgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gadget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="main-product">
            <div class="product-image">
                <img src="<?php echo e(asset('pict/' . $gadget->image)); ?>" alt="<?php echo e($gadget->name); ?>">
            </div>
            <div class="product-name"><?php echo e($gadget->name); ?></div>
            <a href="#" class="detail-link">Lihat Detail</a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Bagian Rekomendasi Produk -->
    <section class="rekomendasi">
        <h2>Rekomendasi</h2>
        <div class="produk-container">
            <?php $__currentLoopData = $recommendedGadgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gadget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="produk">
                    <div class="produk-box">
                        <img src="<?php echo e(asset('pict/' . $gadget->image)); ?>" alt="<?php echo e($gadget->name); ?>">
                    </div>
                    <a href="#" class="lihat-detail">Lihat Detail</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

</body>

</html><?php /**PATH /home/reycannavaro/TechSphere/resources/views/user/homepage.blade.php ENDPATH**/ ?>