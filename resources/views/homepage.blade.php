<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSphere</title>
    <link rel="stylesheet" href="{{ asset(path: 'css/userhomepage.css') }}">
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><b><a href="#">Home</a></b></li>
            <li class="dropdown">
                <b><a href="#">Category</a></b>
                <ul class="itulah"> @foreach($categories as $category)
                    <li><a href="{{ route('homepage', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
                </ul>
            </li>
            <li><b><a href="{{route('about')}}">About Us</a></b></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="{{ asset('pict/Home.png') }}" alt="Home"></a>
            <a href="{{ route('pralogin') }}"><img src="{{ asset('pict/Account.png') }}" alt="User"></a>
        </div>
    </nav>

    @foreach($gadgets as $gadget)
        <div class="main-product">
            <div class="product-image">
                <img src="{{ asset('pict/' . $gadget->image) }}" alt="{{ $gadget->name }}">
            </div>
            <div class="product-name">{{ $gadget->name }}</div>
            <a href="{{ route('pralogin') }}" class="detail-link">Lihat Detail</a>
        </div>
    @endforeach

    <!-- Bagian Rekomendasi Produk -->
    <section class="rekomendasi">
        <h2>Rekomendasi</h2>
        <div class="produk-container">
            @foreach($recommendedGadgets as $gadget)
                <div class="produk">
                    <div class="produk-box">
                        <img src="{{ asset('pict/' . $gadget->image) }}" alt="{{ $gadget->name }}">
                    </div>
                    <a href="{{ route('pralogin') }}" class="lihat-detail">Lihat Detail</a>
                </div>
            @endforeach
        </div>
    </section>

    <div class="komen">
        <h2>Komentar</h2>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h2>TechSphere.</h2>
                <p>
                    Platform terpercaya yang menyajikan informasi lengkap, akurat, <br>
                    dan terbaru tentang alat komunikasi seperti smartphone, laptop, PC, dan tablet.
                </p>
                <div class="footer-socials">
                    <a href="#"><img src="{{asset('pict/web.png')}}" alt="Website" /></a>
                    <a href="#"><img src="{{asset('pict/x.png')}}" alt="X" /></a>
                    <a href="#"><img src="{{asset('pict/ig.png')}}" alt="Instagram" /></a>
                    <a href="#"><img src="{{asset('pict/linkedin.png')}}" alt="LinkedIn" /></a>
                </div>
            </div>

            <div class="footer-center">
                <h2>Shop</h2>
                <ul>
                    <li>Mobile</li>
                    <li>Laptop</li>
                    <li>PC</li>
                    <li>Tablet</li>
                </ul>
            </div>

            <div class="footer-right">
                <h2>Contact</h2>
                <a href="#">+62 111 1111 111</a> <br>
                <a href="#">+62 000 0000 0000</a>

                <h2>Address</h2>
                <p>Sidoarjo, kab. Sidoarjo,</p>
                <p>Jawa Timur, Indonesia</p>
            </div>
        </div>
    </footer>
</body>

</html>