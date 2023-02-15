<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rents Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/icon-navbar-brand.png')}}" alt="Logo" width="40" height="30" class="d-inline-block align-text-top">
      Rio Rent-Books
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Horror</a></li>
            <li><a class="dropdown-item" href="#">Comedy</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-dark btn-sm" href="/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Akhir Navbar-->

<!--Carousel-->
<div id="carouselExampleInterval" class="carousel slide" style="max-height: 400px; max-width: 100%" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="https://img.freepik.com/free-vector/black-friday-paper-style-ig-stories_52683-72448.jpg?w=1380&t=st=1674712988~exp=1674713588~hmac=0d57bb52d3b539748e48de647ecfcdd6591f2f18b078d66faf3ef6df2040f0c0" class="d-blok w-100" alt="..." style="max-height: 400px">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://img.freepik.com/premium-vector/btb-letter-alphabet-abstract-logo-vector-with-business-card-design-premium-vector_538617-435.jpg?w=1380" class="d-block w-100" alt="..." style="max-height: 400px">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/premium-vector/initial-ch-home-logo-icon-design-vector-with-business-card-design-premium-vector_538617-95.jpg" class="d-block w-100" alt="..." style="max-height: 400px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Akhir Carousel -->

<!-- Jumbotron -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h2>Rio Rent-Books</h2>
                <a href="/register" class="btn btn-outline-secondary">Ayo Daftar Sekarang</a>
            </div>
            <div class="col-md-8 mb-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi maxime corrupti recusandae animi! Earum ut perspiciatis similique. Voluptatum quis ipsam quasi. Magnam aliquid, quidem exercitationem eaque ut eligendi adipisci vero beatae dolore vel laboriosam culpa corrupti veritatis soluta assumenda laborum distinctio, numquam praesentium. Quam voluptatibus quibusdam amet quis iusto veritatis.</p>
            </div>
        </div>
    </div>
<!-- Akhir Jumbotron -->
<!-- Card Popular Books -->
<section style="background-color: #7B8FA1;">
    <div class="container mt-3">
        <div class="row text-center text-white">
            <h2 class="mt-2">Popular Books</h2>
            <hr class="solid">
        </div>
        <div class="row my-4 ms-5">
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.12o_Lzlr--S9f5Ou8EcwKAHaLF&pid=Api&P=0" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">The Dreams Of Art</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary w-100">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 ">
                <div class="card" style="width: 18rem;">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/371a8677505735.5c89695fc2798.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary w-100">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.awf3jF7bA3KVxShslw3W9AHaLc&pid=Api&P=0" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary w-100">Read</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Card -->

<!-- Messege -->
    <div class="container mt-4">
        <div class="row text-center">
            <h2>Messege</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name ="name">
                </div>
                <div class="mb-3">
                    <label for="messege" class="form-label">Messege</label>
                    <textarea name ="messege" class="form-control" id="messege"> </textarea>
                </div>
                <button type="submit" class="btn btn-primary ">Send</button>
            </form>
            </div>
        </div>
    </div>
<!-- Akhir Messege -->
<!-- Footer -->
<footer class="mt-5 bg-secondary text-center" style="height:40px;">
    <p>Created by <a href="" style="text-decoration: none; color: white;" target="_blank">Muhammad Rio Dewantoro</a></p>
</footer>
<!-- Akhir Footer -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>