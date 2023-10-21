@extends('layouts.app')

@section('content')
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1; // Inisialisasi nomor urut
            @endphp
            @foreach ($siswa as $s)
                <tr>
                    <td>{{ $no++ }}</td> <!-- Menambahkan nomor urut dan increment -->
                    <td>{{ $s['nama'] }}</td>
                    <td>{{ $s['umur'] }}</td>
                    <td>{{ $s['alamat'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
