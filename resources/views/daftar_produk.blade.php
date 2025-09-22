<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Daftar Produk Kami</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produks as $produk)
                <tr>
                    <td>{{ $produk->nama_produk }}</td>
                    <td>{{ $produk->deskripsi }}</td>
                    <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Belum ada data produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>