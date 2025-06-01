<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Profile</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .profile-container { max-width: 400px; margin: auto; }
        .profile-field { margin-bottom: 15px; }
        label { font-weight: bold; display: block; margin-bottom: 5px; }
        input[readonly] { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; background: #f9f9f9; }
        form { text-align: center; margin-top: 20px; }
        button { padding: 10px 20px; background-color: #e74c3c; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #c0392b; }
    </style>
</head>
<body>

<div class="profile-container">
    <h2>User Profile</h2>

    <div class="profile-field">
        <label>Name</label>
        <input type="text" value="<?php echo e($user->name); ?>" readonly />
    </div>

    <div class="profile-field">
        <label>Email</label>
        <input type="email" value="<?php echo e($user->email); ?>" readonly />
    </div>

    <div class="profile-field">
        <label>Password (hashed)</label>
        <input type="text" value="<?php echo e($user->password); ?>" readonly />
    </div>

    <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit">Logout</button>
    </form>
</div>

</body>
</html><?php /**PATH /home/reycannavaro/TechSphere/resources/views/user/profile.blade.php ENDPATH**/ ?>