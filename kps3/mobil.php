<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!--css-->
    <link rel="stylesheet" href="cssapip.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>SUZUKI</title>
  </head>
  <body>  
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <img src="img/logosuzuki.png" alt="" width="150px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link link" aria-current="page" href="#carouselExampleControls" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="index.php#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="index.php#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="index.php#contactus">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="index.php#feedback">Feedback</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--akhir navbar-->

    
    <!-- Modal -->
    
    <div class="modal fade" data-bs-backdrop="static" id="exampleModal4" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Swift</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Suzuki Swift 2023 adalah salah satu mobil hatchback yang populer di Indonesia. Mobil ini dikenal dengan desainnya yang sporty, performanya yang tangguh, dan konsumsi bahan bakarnya yang irit. Namun, apakah Anda tahu bahwa Suzuki Swift akan segera hadir dengan generasi terbaru yang lebih modern dan canggih?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <div class="modal fade" data-bs-backdrop="static" id="exampleModal5" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Grand Vitara</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Grand Vitara kembali hadir dengan peningkatan memukau dan karakter yang tajam. Dilengkapi mesin yang efisien dengan Smart Hybrid Vehicle by Suzuki (SHVS). Jelajahi setiap rintangan dengan beragam fitur terkini. Grand Vitara merupakan komitmen Suzuki dalam menghadirkan SUV yang handal.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <div class="modal fade" data-bs-backdrop="static" id="exampleModal6" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ertiga</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Dengan bodi yang mewah, All New Ertiga hadir membawa semangat baru.
Dibekali dengan desain new front chrome grille yang berkelas, teknologi projector headlamps yang terang
dan mampu menerangi dengan baik di malam hari, serta LED rear lamp dengan light guides,
All New Ertiga tampil lebih eksklusif. Ground clearance yang tinggi pun mampu memberikan kenyamanan dan keamanan saat harus melewati medan yang tidak terduga. Semakin bangga punya All New Ertiga</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>








    <div class="product" id="product">
      <section class="container">
        <h1 class="text-center">Mobil</h1>
    <div class="row">
          <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">Swift</h3>
                <img src="img/swift1.png" width="400px" class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">Lihat Detail</button>
                </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">Grandvitara</h3>
                <img src="img/grandvitara1.png" width="400px" class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">Lihat Detail</button>
                </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">Ertiga</h3>
                <img src="img/ertiga1.png" width="400px" class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">Lihat Detail</button>
                </div>
            </div>
          </div>
        </div>

        </div>
</section>
</div>
    </body>
    </html>