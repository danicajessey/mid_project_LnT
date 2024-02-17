<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid text-bg-info p-3 opacity-75">
      <a class="navbar-brand" href="/">PT ChipiChapa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/create">Create</a>
          </li>
      </div>
    </div>
  </nav>
<body>
      <div class="p-5">
        <h1 class="text-center">Edit data karyawan baru</h1>
        <form action="{{route('update', $karyawan->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('patch')
          <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input value="{{$karyawan->nama}}"type="text" class="form-control" id="" name="nama">
          </div>
          @error('nama')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">Umur</label>
            <input value="{{$karyawan->umur}}"type="number" class="form-control" id="" name="umur">
          </div>
          @error('umur')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">Alamat</label>
            <input value="{{$karyawan->alamat}}"type="text" class="form-control" id="" name="alamat">
          </div>
          @error('alamat')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror
          <div class="mb-3">
              <label for="" class="form-label">Nomor telpon</label>
              <input value="{{$karyawan->no_telp}}" type="text" class="form-control" id="" name="no_telp">
          </div>
          @error('no_telp')
          <div class="alert alert-danger" role="alert">{{$message}}</div>
        @enderror
          <button type="submit" class="btn btn-success">Edit data</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
