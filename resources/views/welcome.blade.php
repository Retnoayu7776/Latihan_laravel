<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Wisata Lucu</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #f9c5d1, #ffe0ac);
            text-align: center;
            padding: 80px 20px;
            color: #444;
        }
        h1 {
            font-size: 2rem;
            color: #ff6fa8;
        }
        p {
            color: #555;
            margin-bottom: 20px;
        }
        .card {
            background: white;
            width: 300px;
            margin: 20px auto;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 20px;
            transition: 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 14px rgba(0,0,0,0.15);
        }
        a {
            display: inline-block;
            margin-top: 10px;
            background-color: #ffb6c1;
            color: white;
            text-decoration: none;
            padding: 8px 14px;
            border-radius: 10px;
            font-weight: bold;
        }
        a:hover {
            background-color: #ff6fa8;
        }
        footer {
            font-size: 12px;
            color: #777;
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <h1>🎀 Selamat Datang di Sistem Tiket Wisata 🎠</h1>
    <p>Pilih tempat wisata favoritmu di bawah ini!</p>

    <div class="card">
        <h3>🏖️ Pantai Papuma</h3>
        <a href="/tiket/Papuma/20000">Lihat Tiket (Rp 20.000)</a>
    </div>

    <div class="card">
        <h3>🌊 Watu Ulo</h3>
        <a href="/tiket/WatuUlo/15000">Lihat Tiket (Rp 15.000)</a>
    </div>

    <div class="card">
        <h3>🏞️ Puncak B29</h3>
        <a href="/tiket/PuncakB29/10000">Lihat Tiket (Rp 10.000)</a>
    </div>

    <footer>© 2025 Tiket Wisata Imut — Dibuat dengan 💕 dan Laravel</footer>
</body>
</html>
