<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Detail Produk</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h4 class="card-title">{{ $produk->nama }}</h4>
                        <p class="card-text"><strong>Jenis:</strong> {{ $produk->jenis }}</p>
                        <p class="card-text"><strong>Stok:</strong> {{ $produk->stok }}</p>
                        <p class="card-text"><strong>Deskripsi:</strong></p>
                        <p>{{ $produk->deskripsi }}</p>
                        <a href="{{ route('produk.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


