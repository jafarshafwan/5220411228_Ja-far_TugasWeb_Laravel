<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage E-Commerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
            font-family: 'Roboto', sans-serif;
        }
        header {
            text-align: center;
            margin-bottom: 40px;
            background: linear-gradient(to right, #007bff, #03a9f4);
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            font-size: 2.5em;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            color: #ffeb3b; /* Ganti warna tulisan di sini */
        }
        section {
            margin-bottom: 40px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to right, #ffffff, #f8f9fa);
        }
        .produk-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .produk-card {
            width: 300px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            background-color: #ffffff;
            color: #212529;
            border-radius: 10px;
            overflow: hidden;
        }
        .produk-card img {
            max-width: 100%;
            height: auto;
        }
        .produk-card .card-body {
            text-align: center;
        }
        .produk-card:hover {
            transform: scale(1.05);
        }

        /* Warna untuk teks header */
        header h1 {
            color: #ffeb3b;
        }

        /* Warna untuk layanan */
        .col-md-4 h4 {
            color: #007bff;
        }

        /* Warna untuk visi dan misi */
        .col-md-6 h4 {
            color: #03a9f4;
        }

        /* Warna untuk fitur unggulan */
        .col-md-4 h4 {
            color: #ffc107;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('components._navbar')

    <!-- Konten Utama -->
    <div class="container mt-4">
        <!-- Header -->
        <header>
            <h1 class="display-4">Selamat datang di <span style="color: #ffeb3b;">Toko E-Commerce Kami</span></h1>
            <p class="lead">Menyediakan berbagai produk berkualitas tinggi untuk kebutuhan Anda.</p>
        </header>

        <!-- Section Layanan -->
        <section>
            <h2 class="mb-4"><span style="color: #007bff;">Layanan Kami</span></h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Produk Berkualitas</h4>
                    <p>Kami menyediakan produk dengan kualitas terbaik untuk kepuasan pelanggan.</p>
                </div>
                <div class="col-md-4">
                    <h4>Pengiriman Cepat</h4>
                    <p>Pesan hari ini, terima besok! Layanan pengiriman cepat untuk kenyamanan Anda.</p>
                </div>
                <div class="col-md-4">
                    <h4>Pelayanan Pelanggan</h4>
                    <p>Tim pelayanan pelanggan kami siap membantu Anda 24/7.</p>
                </div>
            </div>
        </section>

        <!-- Section Visi Misi -->
        <section>
            <h2 class="mb-4"><span style="color: #03a9f4;">Visi dan Misi Kami</span></h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Visi</h4>
                    <p>Menjadi toko online terkemuka yang memberikan pengalaman belanja terbaik.</p>
                </div>
                <div class="col-md-6">
                    <h4>Misi</h4>
                    <p>Memberikan produk berkualitas tinggi dengan layanan pelanggan yang prima.</p>
                </div>
            </div>
        </section>

        <!-- Section Fitur -->
        <section>
            <h2 class="mb-4"><span style="color: #ffc107;">Fitur Unggulan</span></h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Promo Spesial</h4>
                    <p>Nikmati berbagai promo spesial setiap bulannya untuk penghematan Anda.</p>
                </div>
                <div class="col-md-4">
                    <h4>Program Keanggotaan</h4>
                    <p>Daftar sebagai anggota dan nikmati berbagai keuntungan eksklusif.</p>
                </div>
                <div class="col-md-4">
                    <h4>Ulasan Pelanggan</h4>
                    <p>Baca ulasan pelanggan dan pilih produk berdasarkan pengalaman mereka.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
