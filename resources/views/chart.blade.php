<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candritia</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container-fluid  px-4 px-lg-5">
            <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
                <div class="container"> -->
            <a class="navbar-brand" href="#!">Candritia Nugraha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/shop">Home</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li> --}}
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-white text-primary ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <Section class="py-3">
            <div class="container px-4 px-lg-5 my-3">
                <?php $subtotal = 0; ?>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">Nama</div>
                    <div class="col-md-2">Jumlah</div>
                    <div class="col-md-2">Harga</div>
                    <div class="col-md-2">Sub Total</div>
                    <div class="col-md-2">AKSI</div>
                </div>
                @foreach ($chart as $item)
                <div class="row mt-3">
                    <div class="col-md-2"><img src="/storage/{{ $item->layout->fotobarang }}" width="80" alt=""></div>
                    <div class="col-md-2">{{ $item->layout->nama }}</div>
                    <div class="col-md-2">{{ $item->jumlah }}</div>
                    <div class="col-md-2">{{ $item->layout->harga }}</div>
                    <div class="col-md-2">{{ $item->total }}</div>
                    <div class="col-md-2"class="mb-3" href="layout/hapus/{{ $item->id }}"><button class="btn btn-danger">Hapus</button></div>

                    <div><a ></a></div>
                </div>
                <hr>
                <?php $subtotal += $item->total; ?>
                @endforeach
                <div class="row">
                    <div class="col-md-12">
                        <b>Total</b>
                        <p class="float-end">
                            {{ $subtotal }} <hr>
                             <a href="whatsapp://send?text=
                                @foreach ($chart as $item)
                                 Nama Produk : {{ $item->layout->nama }}, Jumlah : {{ $item->jumlah }},total : {{ $item->total }}
                                 @endforeach
                                 Total yang harus dibayar : {{ $subtotal }}
                                 &phone=+6285722128540">
                             <button class="btn btn-primary">Pesan</button>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </Section>
    </div>
</body>
</html>
