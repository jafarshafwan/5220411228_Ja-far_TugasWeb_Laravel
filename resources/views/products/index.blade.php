<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - E-Commerce</title>
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
        section {
            margin-bottom: 40px;
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
            border-radius: 10px 10px 0 0; /* Menentukan sudut border untuk membuat bentuk kotak */
        }
        .produk-card .card-body {
            text-align: center;
        }
        .produk-card:hover {
            transform: scale(1.05);
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
            <h1 class="display-4">Selamat datang di Toko E-Commerce Kami</h1>
            <p class="lead">Menyediakan berbagai produk berkualitas tinggi untuk kebutuhan Anda.</p>
        </header>

        <!-- Section Produk -->
        <section>
            <h2 class="mb-4">Semua Produk Elektronik</h2>
            <div class="produk-container">
                @foreach ($products as $product)
                    <div class="produk-card card">
                        <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
