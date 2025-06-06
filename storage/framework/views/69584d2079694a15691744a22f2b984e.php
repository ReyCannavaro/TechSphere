<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset("css/admindashboard.css")); ?>">
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><b><a href="<?php echo e(route('admin.categories.index')); ?>">Categories</a></b></li>
            <li><b><a href="<?php echo e(route(name: 'admin.gadgets.dashboard')); ?>">Gadgets</a></b></li>
            <li><b><a href="<?php echo e(route('admin.ratings.index')); ?>">Ratings</a></b></li>
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
        <a href="<?php echo e(route('admin.gadgets.create')); ?>" class="button-1">Tambah Produk</a>
        <table class="tabel">
            <tr class="tabel-head" border-buttom="1px solid #d9d9d9">
                <th width="50vh">No</th>
                <th width="200vh">Nama Produk</th>
                <th width="130vh">Tahun Keluaran</th>
                <th width="150vh">Harga</th>
                <th width="450vh">Deskripsi</th>
                <th width="200vh">Photo</th>
                <th width="150vh">Opsi</th>
            </tr>
            <?php $__currentLoopData = $gadgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gadget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="table-body">
                    <td><?php echo e($gadget->id); ?></td>
                    <td><?php echo e($gadget->name); ?></td>
                    <td><?php echo e($gadget->tahun_keluaran); ?></td>
                    <td>Rp <?php echo e(number_format($gadget->harga, 0, ',', '.')); ?></td>
                    <td class="tabel-deskripsi"><?php echo e($gadget->description); ?></td>
                    <td><img src="<?php echo e(asset('pict/' . $gadget->image)); ?>" width="200px" height="120px"></td>
                    <td>
                        <!-- Link Edit -->
                        <a href="<?php echo e(route('admin.gadgets.edit', $gadget->id)); ?>" class="link">Edit</a>

                        <!-- Link Delete -->
                        <form action="<?php echo e(route('admin.gadgets.destroy', $gadget->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                                class="button">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\techsephere\resources\views/admin/gadgets/dashboard.blade.php ENDPATH**/ ?>