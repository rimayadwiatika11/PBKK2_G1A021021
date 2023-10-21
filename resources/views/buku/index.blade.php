@extends('layouts.buku')

@section('content')
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
            </tr>
        </thead>
        <tbody>
            @php
                $nomor = 1; // Inisialisasi nomor urut
            @endphp
            @foreach ($buku as $item)
                <tr>
                    <td>{{ $nomor++ }}</td> <!-- Menambahkan nomor urut dan increment -->
                    <td>{{ $item['judul'] }}</td>
                    <td>{{ $item['penulis'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
