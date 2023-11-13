<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>DAFTAR PENULIS</h1>
    <h2><a href="{{ route('author.create') }}">Tambah</a></h2>

    @if (session()->has('pesan'))
        <div style="color: rgb(0, 0, 0)">
            {{ session()->get('pesan') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penulis</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $Author)
                <tr>
                    <td>{{ $Author->id }}</td>
                    <td>{{ $Author->name }}</td>
                    <td>{{ $Author->email }}</td>
                    <td>{{ $Author->address }}</td>
                    <td>
                        <a href="{{ route('author.show', $Author->id) }}">Lihat</a>
                        <a href="{{ route('author.edit', $Author->id) }}">Edit</a>
                        <a href action="{{ route('author.destroy', $Author->id) }}" method="post" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
