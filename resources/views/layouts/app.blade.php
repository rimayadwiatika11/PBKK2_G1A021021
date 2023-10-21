<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Daftar Siswa')</title>
    <!-- Tambahkan tag <link> untuk CSS dan <script> untuk JavaScript jika diperlukan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        header {
            background-color: #a36767;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        main {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #b9aeae;
            text-align: center; /* Menengahkan teks dalam sel-sel tabel */
        }

        th, td {
            padding: 10px;
        }

        th {
            background-color: #856868;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <h1>DAFTAR SISWA</h1>
        <h2>KELAS XII SMAN 1 KOTA</h1>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>
