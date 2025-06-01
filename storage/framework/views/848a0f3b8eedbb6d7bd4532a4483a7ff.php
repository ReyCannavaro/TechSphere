<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-sans">

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="bg-gray-100 p-10 rounded-3xl shadow-md w-full max-w-xl">
            <h2 class="text-2xl font-bold text-center mb-8">Produk Baru</h2>

            <form action="<?php echo e(url('admin/gadgets/store')); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
                <?php echo csrf_field(); ?>

                <div>
                    <label class="block text-gray-700 mb-1">Nama Produk</label>
                    <input type="text" name="name" class="w-full border-b border-gray-300 focus:outline-none focus:border-black bg-transparent py-2" required>
                </div>

                <div>
                    <label class="block text-gray-700 mb-1">Kategori</label>
                    <select name="categories_id" class="w-full border-b border-gray-300 focus:outline-none focus:border-black bg-transparent py-2" required>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->nama_kategori); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700 mb-1">Tahun Keluaran</label>
                    <input type="number" name="tahun_keluaran" class="w-full border-b border-gray-300 focus:outline-none focus:border-black bg-transparent py-2" required>
                </div>

                <div>
                    <label class="block text-gray-700 mb-1">Harga</label>
                    <input type="number" name="harga" class="w-full border-b border-gray-300 focus:outline-none focus:border-black bg-transparent py-2" required>
                </div>

                <div>
                    <label class="block text-gray-700 mb-1">Spesifikasi</label>
                    <textarea name="description" rows="3" class="w-full border-b border-gray-300 focus:outline-none focus:border-black bg-transparent py-2" required></textarea>
                </div>

                <div>
                    <label class="block text-gray-700 mb-1">Photo</label>
                    <input type="file" name="image" class="w-full bg-white py-2 px-4 border border-gray-300 rounded-md">
                </div>

                <div class="flex justify-between pt-6">
                    <a href="<?php echo e(route('admin.gadgets.dashboard')); ?>" class="bg-white border border-black text-black py-2 px-6 rounded-full font-semibold hover:bg-gray-200">Kembali</a>
                    <button type="submit" class="bg-black text-white py-2 px-6 rounded-full font-semibold hover:bg-gray-800">Tambah</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
<?php /**PATH /home/reycannavaro/TechSphere/resources/views/admin/gadgets/create.blade.php ENDPATH**/ ?>