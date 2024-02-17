<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

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
    <h1 class="text-center">View Data Karyawan</h1>
    <div class="d-flex flex-row justify-content-center gap-5 row row-cols-3 row-cols-md-4 g-2">
        @foreach ($karyawan as $b)
        <div class="col">
        <div class="card" >
                <img src="{{asset('/storage/image/'. $b->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Name: {{$b->nama}}</p>
                  <p class="card-text">Umur: {{$b->umur}}</p>
                  <p class="card-text">Alamat: {{$b->alamat}}</p>
                  <p class="card-text">Nomor telpon: {{$b->no_telp}}</p>
                  <a href="{{route('edit', $b->id)}}" class="btn btn-success">Edit</a>

                  <a href="{{route('edit2', $b->id)}}" class="btn btn-success">Edit Foto</a>
                  <br>

                  <form action="{{route('delete', $b->id)}}" method="POST">
                      @csrf
                      @method('delete')
                      <br>
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </div>
        </div>
        </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
