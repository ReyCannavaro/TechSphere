<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TechSaphere</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
        </ul>
    </nav>

    <div class="container">
        <h2>Log In</h2>
        <form action="<?php echo e(url('/login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Berikutnya</button>
        </form>
        <a href="<?php echo e(route('register')); ?>">Buat akun.</a>
        <button class="google-login">Masuk dengan Google</button>
    </div>
</body>

</html><?php /**PATH /home/reycannavaro/TechSphere/resources/views/login.blade.php ENDPATH**/ ?>