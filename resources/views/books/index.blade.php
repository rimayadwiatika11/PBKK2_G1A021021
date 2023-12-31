<link rel = "stylesheet" href="{{asset ('css/buku.css') }}">

<h1>DAFTAR BUKU</h1>
<h2><a href="{{ route('books.create') }}">Tambah</a></h2>
@foreach ($books as $book)
    <div class="book-item">
        <div>
            Judul: {{ $book->title }}
            <br>
            Penulis: {{ $book->author->name}}
            <br>
            Deskripsi: {{ $book->description }}
        </div>
        <div>
            <a href="{{ route('books.show', $book->id) }}">Lihat</a>
            <a href="{{ route('books.edit', $book->id) }}">Edit</a>

            <form action="{{ route('books.destroy', $book->id) }}" method="post" class="delete-form">
                @csrf
                @method('DELETE')
                <input type="submit" value="Hapus">
            </form>
        </div>
    </div>
    <hr>
@endforeach
