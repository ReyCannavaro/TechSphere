<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* General Styles */
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
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><b><a href="<?php echo e(route('admin.categories.index')); ?>">Categories</a></b></li>
            <li><b><a href="#">Gadgets</a></b></li>
            <li><b><a href="#">Ratings</a></b></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="<?php echo e(asset('pict/Home.png')); ?>" alt="Home"></a>
            <a href="#"><img src="<?php echo e(asset('pict/Account.png')); ?>" alt="User"></a>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>

        </div>
    </nav>

    

    <?php $__env->startSection('content'); ?>
        <h1>Daftar Produk</h1>
        <a href="<?php echo e(route('admin.gadgets.create')); ?>" class="btn btn-success mb-3">Tambah Produk</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category ID</th>
                <th>Tahun</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </tr>
            <?php $__currentLoopData = $gadgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gadget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($gadget->id); ?></td>
                    <td><?php echo e($gadget->name); ?></td>
                    <td><?php echo e($gadget->categories_id); ?></td>
                    <td><?php echo e($gadget->tahun_keluaran); ?></td>
                    <td>Rp <?php echo e(number_format($gadget->harga, 0, ',', '.')); ?></td>
                    <td><?php echo e($gadget->description); ?></td>
                    <td><img src="<?php echo e(asset('pict/' . $gadget->image)); ?>"></td>
                    <td>
                        <!-- Link Edit -->
                        <a href="<?php echo e(route('admin.gadgets.edit', $gadget->id)); ?>">Edit</a> |

                        <!-- Link Delete -->
                        <form action="<?php echo e(route('admin.gadgets.destroy', $gadget->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/reycannavaro/TechSphere/resources/views/admin/gadgets/dashboard.blade.php ENDPATH**/ ?>