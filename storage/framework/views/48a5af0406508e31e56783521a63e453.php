<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Produk</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background-color: #f5f5f5;
      padding: 40px 30px;
      border-radius: 25px;
      width: 100%;
      max-width: 400px; /* LEBAR DIBATASI */
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
      margin: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 24px;
      font-weight: bold;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-size: 15px;
    }

    input[type="text"],
    input[type="year"],
    input[type="number"],
    input[type="file"],
    input[type="string"],
    select {
      width: 100%;
      padding: 10px 8px;
      margin-bottom: 20px;
      border: none;
      border-bottom: 1px solid #ccc;
      background-color: transparent;
      font-size: 15px;
      outline: none;
    }

    .buttons {
      display: flex;
      justify-content: space-between;
      gap: 10px;
    }

    .buttons button {
      flex: 1;
      padding: 12px;
      border: none;
      border-radius: 30px;
      font-weight: bold;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    .btn-kembali {
      background-color: white;
      color: black;
      border: 2px solid #000;
    }

    .btn-simpan {
      background-color: #2e2e2e;
      color: white;
    }

    .btn-kembali:hover {
      background-color: #f0f0f0;
    }

    .btn-simpan:hover {
      background-color: #1c1c1c;
    }

    @media screen and (max-width: 480px) {
      .container {
        padding: 30px 20px;
        max-width: 90%;
      }

      h2 {
        font-size: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Edit Produk</h2>
    <form action="<?php echo e(route('admin.gadgets.update', $gadgets->id)); ?>" method="POST" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>

      <label>Nama Gadget:</label>
      <input type="text" name="name" value="<?php echo e($gadgets->name); ?>" required>

      <label for="categories">Kategori:</label>
      <select name="categories_id" id="category">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $gadgets->categories_id ? 'selected' : ''); ?>>
          <?php echo e($category->name); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>

      <label>Tahun Keluaran</label>
      <input type="year" name="tahun_keluaran" value="<?php echo e($gadgets->tahun_keluaran); ?>" required>

      <label>Harga</label>
      <input type="number" name="harga" value="<?php echo e($gadgets->harga); ?>" required>

      <label>Deskripsi</label>
      <input type="string" name="description" value="<?php echo e($gadgets->description); ?>" required>

      <label>Photo</label>
      <input type="file" name="image">

      <div class="buttons">
        <button type="button" class="btn-kembali" onclick="history.back()">Kembali</button>
        <button type="submit" class="btn-simpan">Simpan</button>
      </div>
    </form>
  </div>
</body>

</html>
<?php /**PATH /home/reycannavaro/TechSphere/resources/views/admin/gadgets/edit.blade.php ENDPATH**/ ?>