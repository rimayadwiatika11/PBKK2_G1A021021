<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <link rel = "stylesheet" href="{{asset ('css/create.css') }}">
    <div>
        Judul buku:
        <input type="text" name="title" value="{{ old('title', $book->title) }}" />

        <br>

        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Penulis:
        <select name="author_id">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>

        <br>

        @error('author_id')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Deskripsi:
        <textarea name="description">{{ old('description', $book->description) }}</textarea>

        <br>

        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
</form>
