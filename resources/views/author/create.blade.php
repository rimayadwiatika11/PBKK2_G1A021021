<form action="{{ route('author.store') }}" method="POST">
    <h2><a href="{{ route('author.index') }}">Lihat Data Penulis</a></h2>
    @csrf
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <div>
        <label for="name">ID:</label>
        <input type="text" name="id" value="{{ old('id') }}" />
        <br>
        @error('id')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="name">Nama Penulis:</label>
        <input type="text" name="name" value="{{ old('name') }}" />
        <br>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" value="{{ old('email') }}" />
        <br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="address">Alamat:</label>
        <textarea name="address">{{ old('address') }}</textarea>
        <br>
        @error('address')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <input type="submit" value="Simpan">
    </div>
    <br>
</form>
