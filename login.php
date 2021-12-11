<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="mybootstrap.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand fs-3 font-weight-bold" href="#">Login</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="http://localhost/DRAMAKOST/index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="about.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="contact.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="#">Privacy Policy</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <section class="hero py-3>
    <div class="container">
      <div class="d-flex justify-content-center">
        <h1 class="font-weight-bold py-3 fs-2 text-white">Log in</h1>
      </div>
    </div>
  </section>

  <main class="content bg-light container pt-5 pb-5">
    <div class="row justify-content-center">
      <form action="C:\xampp\htdocs\DramaKost\php\login.php" method="POST" class="col-md-7">
      <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label">Username</label><br>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" minlength="4" maxlength="30" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email Address</label><br>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="email" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Password</label><br>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="password" minlength="8" maxlength="16" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-success">Login</button>
            </div>
          </div>
      </form>
    </div>
  </main>

  <section class="hero py-5">
    <div class="d-flex container justify-content-center flex-wrap">
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Putra</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Putri</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Campur</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Bulanan</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Tahunan</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Kost</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Bateng</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Bara</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Balio</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Perwira</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Cangkurawok</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Babakan</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Balebak</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Rekomendasi</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Paling dicari</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Terjangkau</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Promo</a>
      <a class="badge badge-dark fs-4 m-1 p-2" href="">Available</a>
    </div>
  </section>

  <footer class="bg-dark text-white pt-4 pb-2">
    <div class="container text-center">
      <h2 class="font-weight-bold">DramaKost</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus imperdiet lectus at metus finibus iaculis. 
        Integer gravida nec eros et semper. Nam et ex iaculis, ornare urna a, iaculis neque. Praesent et tortor vitae 
        nisl sodales pharetra. Nulla ac metus erat. Proin quis consequat nunc. Maecenas iaculis ipsum vel iaculis consequat. 
        Maecenas convallis convallis ex, in convallis mi sollicitudin consequat. Aliquam at dolor sit amet eros dictum 
        maximus eget vel enim. Donec fringilla tellus quis lacus accumsan rhoncus sit amet vitae ipsum. Quisque erat nisl, 
        maximus eu iaculis ornare, vehicula id metus. Praesent nec viverra metus, a mattis sapien. Maecenas eget metus 
        rutrum, ornare ipsum eget, maximus diam. Pellentesque id neque id odio tempor venenatis. Vestibulum nulla risus, 
        lacinia eu orci aliquam, congue eleifend arcu.
      </p>
      <div class="d-flex flex-wrap justify-content-center">
        <a class="bagde badge-success fs-4 p-2 m-1" href="about.html">About us</a>
        <a class="bagde badge-success fs-4 p-2 m-1" href="">Privacy policy</a>
        <a class="bagde badge-success fs-4 p-2 m-1" href="contact.html">Contact us</a>
      </div>
    </div>
    <div class="credits text-center py-2 fs-5">
      <p>Made by Kelompok 11 &copy; 2021. All right reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
