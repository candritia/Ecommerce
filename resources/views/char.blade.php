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
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="shop.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
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
    <Section class="py-3">
        <div class="container px-4 px-lg-5 my-3">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/storage/{{ $layout->fotobarang }}" alt=""></div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-001</div>
                    <h1 class="display-5 fw-bolde">{{ $layout->nama }}</h1>
                    <div class="fs-5 mb-2">
                        <span>{{ $layout->harga }}</span>
                    </div>
                    <p class="lead">Hal Menarik Honda Civic Type R 2023, Civic Tercepat yang Dibuat Honda!
                        Honda Civic Type R
                        5 Hal Menarik Honda Civic Type R 2023, Civic Tercepat yang Dibuat Honda!
                        Honda Civic Type R (Spesifikasi | Berita) 2023</p>
                    <div class="d-flex">
                        <form action="{{ url('chart').'/'.$layout->id }}" method="post">@csrf
                            <input class="form-control text-center me-3" id="inputquantity" type="num" value="1" style="max-width: 3rem" name="jumlah">
                            <button class="btn btn-outline-primary flex-shrink-0 " type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Add To Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </Section>
    <section class="py-2">
        <div class="container px-4 px-lg-5 mt-5" id="about">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($layouts as $item)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-primary text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/storage/{{ $item['fotobarang'] }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $item['nama'] }}</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                Rp {{ $item['harga'] }}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/detail/{{ $item['id'] }}">View</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</body>
</html>
