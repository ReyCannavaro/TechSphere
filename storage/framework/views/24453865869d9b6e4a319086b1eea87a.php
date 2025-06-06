<?php $__env->startSection('content'); ?>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            padding-left: 50px;
            font-family: 'Kalnia';
            font-size: 28px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 50px;
        }

        .nav-links li a {
            text-decoration: none;
            color: black;
            font-size: 20px;
            font-weight: bold;
        }

        .nav-icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-bar {
            margin-right: 30px;
            padding: 10px 40px;
            border: none;
            border-radius: 20px;
            background-color: #d9d9d9;
        }

        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #f5f5f5;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

    /* Table Styles */
    .kategori-container {
        padding: 30px;
    }

    h1 {
        font-size: 32px;
        margin-bottom: 20px;
    }

    .btn-tambah {
        background: linear-gradient(to right, #444, #888);
        border: none;
        padding: 10px 20px;
        border-radius: 30px;
        color: white;
        font-weight: bold;
        margin: 20px 0;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-tambah:hover {
        background: linear-gradient(to right, #333, #777);
    }

    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 700px;
    }

    th {
        background-color: #333;
        color: white;
        text-align: left;
        padding: 12px;
    }

    td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
    }

    .opsi a {
        margin-right: 10px;
        font-weight: bold;
        text-decoration: underline;
        color: black;
    }

    .opsi a:hover {
        color: #555;
    }
</style>

    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><a href="<?php echo e(route('admin.categories.index')); ?>">Categories</a></li>
            <li><a href="<?php echo e(route('admin.gadgets.dashboard')); ?>">Gadgets</a></li>
            <li><a href="<?php echo e(route('admin.ratings.index')); ?>">Ratings</a></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="<?php echo e(asset('pict/Home.png')); ?>" alt="Home" width="24"></a>
            <a href="#"><img src="<?php echo e(asset('pict/Account.png')); ?>" alt="User" width="24"></a>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit">Logout</button>
            </form>
        </div>
    </nav>

<div class="kategori-container">
    <h1>Daftar Kategori</h1>

    <a href="<?php echo e(route('admin.categories.create')); ?>">
        <button class="btn-tambah">Tambah Kategori</button>
    </a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($category->name); ?></td>
                <td class="opsi">
                    <a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>">Edit</a>
                    <a href="<?php echo e(route('admin.categories.destroy', $category->id)); ?>"
                       onclick="return confirm('Apakah kamu yakin ingin menghapus kategori ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/reycannavaro/TechSphere/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>