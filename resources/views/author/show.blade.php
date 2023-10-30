<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Penulis</title>
  <link rel="stylesheet" href="{{asset ('css/show.css') }}">
</head>
<body>
  <div class="container">
    <div class="text-center">
      <h4>DATA PENULIS</h4>
      <div class="author-info">
        <p>ID: <span>{{ $Author->id }}</span></p>
        <p>Nama Penulis: <span>{{ $Author->name }}</span></p>
        <p>Email: <span>{{ $Author->email }}</span></p>
        <p>Alamat: <span>{{ $Author->address }}</span></p>
      </div>
    </div>
  </div>
</body>
</html>
