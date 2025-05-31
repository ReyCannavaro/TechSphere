<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

        h1 {
            margin-top: 30px;
            font-size: 36px;
            font-weight: bold;
        }

        .btn-add {
            background: linear-gradient(to bottom, #555, #999);
            color: white;
            border: none;
            padding: 12px 30px;
            font-weight: bold;
            border-radius: 30px;
            margin: 20px 0;
            cursor: pointer;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin-bottom: 50px;
        }

        table th, table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }

        table th {
            background-color: #333;
            color: white;
        }

        table td img {
            height: 60px;
        }

        .color-dot {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin: 0 3px;
            border: 1px solid #aaa;
        }

        .options a {
            margin: 0 5px;
            font-weight: bold;
            color: black;
            text-decoration: none;
        }

        .options a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><a href="{{ route('admin.categories.index') }}">Categories</a></li>
            <li><a href="{{ route('admin.gadgets.dashboard') }}">Gadgets</a></li>
            <li><a href="{{ route('admin.ratings.index') }}">Ratings</a></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="{{ asset('pict/Home.png') }}" alt="Home" width="24"></a>
            <a href="#"><img src="{{ asset('pict/Account.png') }}" alt="User" width="24"></a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <h1>Daftar Produk</h1>
    <a href="{{ route('admin.gadgets.create') }}" class="btn-add">Tambah Produk</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Tahun keluaran</th>
            <th>Harga</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Opsi</th>
        </tr>
        @foreach($gadgets as $index => $gadget)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $gadget->name }}</td>
                <td>{{ $gadget->tahun_keluaran }}</td>
                <td><strong>Rp{{ number_format($gadget->harga, 0, ',', '.') }}</strong></td>
                <td>{{ $gadget->description }}</td>
                <td><img src="{{ asset('pict/' . $gadget->image) }}"></td>
                <td class="options">
                    <a href="{{ route('admin.gadgets.edit', $gadget->id) }}">Edit</a>
                    <form action="{{ route('admin.gadgets.destroy', $gadget->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" style="background: none; border: none; color: black; font-weight: bold; cursor: pointer;">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
