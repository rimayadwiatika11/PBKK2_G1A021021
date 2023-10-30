<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Buku</title>
  <link rel="stylesheet" href="{{asset ('css/show.css') }}">
</head>
<body>
  <div class="container">
    <h4>DATA BUKU</h4>
    <div class="book-info">
      <p>Judul: <span>{{ $book->title }}</span></p>
      <p>Penulis: <span>{{ $book->author }}</span></p>
      <p>Deskripsi: <span>{{ $book->description }}</span></p>
    </div>
  </div>
</body>
</html>
