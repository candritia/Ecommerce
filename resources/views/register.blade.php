<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form action="/daftar/create" method="post">
    @csrf
    <div class="container py-5 w-25">
        <div class="card mt-5 flex-fill" style="max-width: 20rem">
        <h2 class="text-center fw-bold mt-2">REGISTER</h2>
    <div class="form-out-line mb-3 mt-2 form-control">
        <input type="text" name="name" id="nama" class="form-control" placeholder="Nama">
    </div>
    <div class="form-out-line mb-3 mt-2 form-control">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-out-line mb-3 mt-2 form-control">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
    </div>
    <center><button type="submit" class="btn btn-primary btn-block mb-3">Add+</button></center>
   <div class="text-center">
    {{-- <p>Silahkan! <a href="/">Login</a></p> --}}
    </div>

        </div>
     </div>
    </form>
</body>
</html>

 