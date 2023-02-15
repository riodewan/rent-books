<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rents Books | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    .main{
        height: 100vh;
    }

    .sidebar{
        background-color: #86A3B8;
    }

    .content{
        padding: 20px 20px;
    }

    .sidebar a{
        text-decoration: none;
        padding: 20px 30px;
        color: #fff;
        display: block;
    }

    .sidebar a:hover{
        background-color: #13005A;
    }

    .sidebar a.active{
        background-color: #13005A;
        border-right: solid 4px #FF8B13;
    }

    .book{
        background-color: teal;
    }

    .category{
        background-color: #B99B6B;
    }

    .user{
        background-color: #698269;
    }

    .card-data{
        border-radius: 5px;
        padding: 15px 50px;
        border: solid 1px;
        color: #fff;
    }

    .card-data i{
        font-size: 50px;
    }

    @media screen and (max-width: 992px) {
    .card-data i{
        font-size: 75px;
    }
    .desc{
        margin-top: -100px;
    }
    }


    @media screen and (max-width: 600px) {
    .card-data i {
        font-size: 75px;
    }

    .desc{
        margin-top: -100px;
    }

    }       

    .desc{
        font-size: 30px;
    }

    .count{
        font-size: 30px;
    }
</style>
<body>
    <div class="main d-flex flex-column justify-content-between">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
    <a class="navbar-brand" href="#">Rio Rents-Books</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="body-main h-100">
    <div class="row g-0 h-100">
        <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
            @if(Auth::user()->role_id == 1)
            <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class= 'active' @endif><i class="bi bi-house-lock p-1"></i>Dashboard</a>
            <a href="/users"@if(request()->route()->uri == 'users') class= 'active' @endif><i class="bi bi-person-fill p-1"></i>User</a>
            <a href="/category" @if(request()->route()->uri == 'category' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-edit/{slug}') class= 'active' @endif><i class="bi bi-bookmarks p-1"></i>Category</a>
            <a href="/books" @if(request()->route()->uri == 'books' || request()->route()->uri == 'books-add' ||request()->route()->uri == 'books-edit/{slug}') class= 'active' @endif><i class="bi bi-book p-1"></i>Books</a>
            <a href="/rentlogs" @if(request()->route()->uri == 'rentlogs') class= 'active' @endif><i class="bi bi-cart p-1"></i>Rent Logs</a>
            <a href="/logout"><i class="bi bi-box-arrow-left p-1"></i>Logout</a>
            @else
            <a href="/profile" @if(request()->route()->uri == 'profile') class= 'active' @endif><i class="bi bi-person-lock p-1"></i>Profile</a>
            <a href="/logout"><i class="bi bi-box-arrow-left p-1"></i>Logout</a>
            @endif
        </div>
        <div class="content col-lg-10">
            @yield('content')
        </div>
    </div>
</div>
</div>


    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>