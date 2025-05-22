<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TechSaphere</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
</head>

<body>
    <div class="container">
        <h2>Make a new account</h2>
        <form action="<?php echo e(route('register.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="name" placeholder="Nama Lengkap" required>
            <button type="submit">Berikutnya</button>
        </form>
        <a href="<?php echo e(route('login')); ?>">Kembali</a>
    </div>
</body>

</html><?php /**PATH /home/reycannavaro/TechSphere/resources/views/register.blade.php ENDPATH**/ ?>