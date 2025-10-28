<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Tiket Wisata</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #ffd6f6, #c1eaff);
            text-align: center;
            padding: 80px 20px;
            color: #444;
        }
        .card {
            background: white;
            width: 350px;
            margin: auto;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 25px;
        }
        h2 {
            color: #ff6fa8;
            margin-bottom: 20px;
        }
        .harga {
            color: #28a745;
            font-weight: bold;
            font-size: 1.2em;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background-color: #ffa5b0;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 10px;
            font-weight: bold;
        }
        a:hover {
            background-color: #ff6fa8;
        }
        .emoji {
            font-size: 40px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="emoji">🎡</div>
        <h2>Informasi Tiket Wisata</h2>
        <p>Tempat Wisata: <b>{{ $tempat }}</b></p>
        <p>Harga Tiket: <span class="harga">Rp {{ number_format($harga, 0, ',', '.') }}</span></p>
        <a href="/">⟵ Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
