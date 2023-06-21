<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Candritia</title>
</head>
<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed">
  <div class="container ">
    <img align="lept" src="storage/fotobarang/kranjang.jpg" alt=""  class="rounded-circle img-thumbnail" alt="" width="70" height="70">
      <a href="" class="navbar-brand ">SHOPP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavbarNav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a href="/shop" class="nav-link active" aria-current="page"><h5>Home</h5></a>
              </li>
              <li class="nav-item">
                  <a href="/shop" class="nav-link "><h5>Shop</h5></a>
              </li>
              <li class="nav-item">
                  <a href="/logout" class="nav-link "><h5>Logout</h5></a>
              </li>
          </ul>
      </div>
  </div>
</nav><br>
<div class="container">
<div class="pb-3">
<form action="{{ url('layout/cari') }}" method="get" class="d-flex">
    <input class="form-control me-1" type="search" name="cari" placeholder="Pencarian" id="cari">
    <button type="submit" class="btn btn-primary">Cari</button>
    {{-- <input type="submit" value="CARI"> --}}
    </form>
   </div>

    <a href="{{ ('layout/add') }}"> <button class="btn btn-primary">Tambah Data</button></a><br>
    <table border="1" class="table table-striped mt-2 text-center" style="100%">
      <thead>
       
     
        <tr>
          <th>NO</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>FOTO BARANG</th>
            <th>HARGA</th>
            <th>AKSI</th>
    
        </tr>
       </thead>
      @foreach ($layout as $key => $item)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nama }}</td>
        <td><img src="/storage/{{ $item->fotobarang }}" class="rounded-circle img-thumbnail" alt="" width="100" height="100"></td>
        <td>{{ $item->harga }}</td>
        <td><a class="mb-3" href="layout/hapus/{{ $item->id }}"><button class="btn btn-danger">Hapus</button></a>
            <a href="layout/edit/{{ $item->id }}"><button class="btn btn-primary">Edit</button></a></td>
        
      </tr>
          
      @endforeach
    
    
    </table>
    <a href="/logout"> <button class="btn btn-danger">Logout</button></a><br></a>
  </div>
  </body>
