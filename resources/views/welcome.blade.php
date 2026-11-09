<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengaduan Sarana</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700" rel="stylesheet" />
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f0f4ff;
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        nav {
            background: #1d4ed8;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .brand {
            color: #fff;
            font-size: 1.3rem;
            font-weight: 700;
            letter-spacing: .5px;
        }
        nav .nav-links a {
            color: #bfdbfe;
            text-decoration: none;
            margin-left: 1.2rem;
            font-size: .9rem;
            transition: color .2s;
        }
        nav .nav-links a:hover { color: #fff; }
        .hero {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 4rem 2rem;
            text-align: center;
        }
        .hero-badge {
            background: #dbeafe;
            color: #1d4ed8;
            border-radius: 2rem;
            padding: .3rem 1rem;
            font-size: .8rem;
            font-weight: 600;
            margin-bottom: 1.2rem;
            display: inline-block;
        }
        .hero h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 1rem;
            line-height: 1.25;
        }
        .hero p {
            font-size: 1.05rem;
            color: #475569;
            max-width: 500px;
            margin-bottom: 2rem;
            line-height: 1.7;
        }
        .btn-group { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
        .btn {
            padding: .7rem 1.8rem;
            border-radius: .5rem;
            font-size: .95rem;
            font-weight: 600;
            text-decoration: none;
            transition: all .2s;
        }
        .btn-primary { background: #1d4ed8; color: #fff; }
        .btn-primary:hover { background: #1e40af; }
        .btn-outline { background: #fff; color: #1d4ed8; border: 2px solid #1d4ed8; }
        .btn-outline:hover { background: #eff6ff; }
        .cards {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            padding: 2rem;
            max-width: 900px;
            margin: 0 auto 3rem;
        }
        .card {
            background: #fff;
            border-radius: .75rem;
            padding: 1.5rem;
            width: 240px;
            box-shadow: 0 2px 10px rgba(0,0,0,.07);
            text-align: center;
        }
        .card-icon { font-size: 2rem; margin-bottom: .8rem; }
        .card h3 { font-size: 1rem; font-weight: 600; margin-bottom: .4rem; }
        .card p { font-size: .85rem; color: #64748b; line-height: 1.5; }
        footer {
            background: #1e293b;
            color: #94a3b8;
            text-align: center;
            padding: 1.2rem;
            font-size: .82rem;
        }
    </style>
</head>
<body>
    <nav>
        <span class="brand">📋 Pengaduan Sarana</span>
        <div class="nav-links">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/admin') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Masuk Admin</a>
                    <a href="{{ url('/siswa') }}">Portal Siswa</a>
                @endauth
            @endif
        </div>
    </nav>

    <div class="hero">
        <span class="hero-badge">Pengaduan Sarana Sekolah</span>
        <h1>Pengaduan Sarana</h1>
        <p>Layanan pengaduan sarana dan prasarana sekolah secara online, cepat, dan transparan.</p>
        <div class="btn-group">
            @guest
                <a href="{{ url('/siswa') }}" class="btn btn-primary">Buka Pengaduan Sarana</a>
                <a href="{{ url('/admin') }}" class="btn btn-outline">Masuk Admin</a>
            @endguest
            @auth
                <a href="{{ url('/admin') }}" class="btn btn-primary">Buka Dashboard</a>
            @endauth
        </div>
    </div>

    <div class="cards">
        <div class="card">
            <div class="card-icon">📝</div>
            <h3>Kirim Pengaduan</h3>
            <p>Laporkan kerusakan atau kekurangan sarana sekolah dengan mudah.</p>
        </div>
        <div class="card">
            <div class="card-icon">🔍</div>
            <h3>Pantau Status</h3>
            <p>Lacak tindak lanjut pengaduan sarana secara berkala.</p>
        </div>
        <div class="card">
            <div class="card-icon">✅</div>
            <h3>Tanggapan Selesai</h3>
            <p>Petugas menindaklanjuti dan memperbaiki sarana yang diadukan.</p>
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} Pengaduan Sarana
    </footer>
</body>
</html>
