<? php
session_start();
if(!isset($_SESSION['admin']))
{
  header("Location: http://localhost/DRAMAKOST/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Insert Pos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="mybootstrap.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="asset/l.png" width="70" length="20">
      <a class="navbar-brand fs-3 font-weight-bold" href="#">DramaKost</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="http://localhost/DRAMAKOST/index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="../about.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="http://localhost/DRAMAKOST/crud/listkkost.php">Edit Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="../privacypolicy.html">Privacy Policy</a>
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
        <h1 class="font-weight-bold py-3 fs-2 text-white">Insert Post</h1>
      </div>
    </div>
  </section>

  <main class="content bg-light container pt-5 pb-5">
    <div class="row justify-content-center">
      <form action="http://localhost/DramaKost/admin/php/insert_post.php" method="POST" class="col-md-7">
          <input name="admin" type="hidden" value="<?php echo $_SESSION['admin']?>">
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">Title</label><br>
            <div class="col-sm-10">
              <input type="text" name="title" class="form-control" id="title" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="SEO" class="col-sm-3 col-form-label">SEO Title</label><br>
            <div class="col-sm-10">
              <input type="text" name="SEO" class="form-control" id="SEO" minlength="4" maxlength="30" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="Category" class="col-sm-3 col-form-label">Category</label><br>
            <div class="col-sm-10">
              <input list="Categories" name="Category" class="form-control" id="Category" required>
              <datalist id="Categories">
                <option value="Kost">Kost</option>
                <option value="Kontrakan">Kontrakan</option>
                <option value="Apartemen">Apartemen</option>
              </datalist>
            </div>
          </div>
          <div class="form-group row">
            <label for="price" class="col-sm-3 col-form-label">Price</label><br>
            <div class="col-sm-10">
              <input type="number" name="price" class="form-control" id="price" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="Message" class="col-sm-3 col-form-label">Content</label>
            <div class="col-sm-10">
              <textarea name="content" class="form-control p-3 w-100" rows="15" id="Message" required"></textarea>
            </div>
          </div>
          
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" name="post" class="btn btn-success" value="post">Post</button>
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
        DramaKost merupakan terobosan terbaru yang memanfaatkan teknologi untuk perkembangan pencarian kos menjadi lebih mudah 
        sehingga memudahkan calon anak kos untuk mencari informasi kost di sekitar Dramaga.  
        Saat ini kami memiliki lebih dari 50 kamar kos yang tersebar di sekitar wilayah Dramaga.
        Berbagai informasi telah diberikan untuk memudahkan dalam memilih hunian nyaman
        serta sesuai dengan keinginan pengguna. Dapatkan juga berbagai promo dan voucher dari para pemilik kost yang
        bisa dilihat pada masing-masing deskripsi kost.
      </p>
      <div class="d-flex flex-wrap justify-content-center">
        <a class="bagde badge-success fs-4 p-2 m-1" href="../about.html">About us</a>
        <a class="bagde badge-success fs-4 p-2 m-1" href="../privacypolicy.html">Privacy policy</a>
        <a class="bagde badge-success fs-4 p-2 m-1" href="../contact.html">Contact us</a>
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
