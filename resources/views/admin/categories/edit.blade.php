@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kategori</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            margin-top: 40px;
            font-size: 32px;
        }

        form {
            width: 500px;
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 30px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .btn-submit {
            background: linear-gradient(to right, #444, #888);
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit:hover {
            background: linear-gradient(to right, #333, #777);
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            color: black;
            text-decoration: underline;
            font-weight: bold;
        }

        .btn-back:hover {
            color: #555;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: -15px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <h1>Edit Kategori</h1>

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nama Kategori</label>
        <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required>

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn-submit">Update</button>
    </form>

    <a href="{{ route('admin.categories.index') }}" class="btn-back">← Kembali ke daftar kategori</a>

</body>
</html>
@endsection
