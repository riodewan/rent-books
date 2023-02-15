<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    .form-register{
        border: 1px solid;
        padding : 10px;
        border-radius: 10px;
    }
  </style>
  <body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height:100vh;">
        <div class="form-register">
        @if (session('status'))
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="" method="post" style="width:500px;">
        @csrf
            <div class="mb-3 text-center">
                <h3>Register</h3>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" name="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea type="text" name="address" class="form-control" id="address">
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
            <div class="mb-3 text-center">
                <p>Have a account? <a href="/login" style="text-decoration: none;">Login</a></p>
            </div>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>