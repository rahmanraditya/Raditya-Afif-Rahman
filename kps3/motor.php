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
    <div class="modal fade" data-bs-backdrop="static" id="exampleModal1" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">GSX-R 150</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <P>Suzuki GSX-R 150 adalah ikon dan penerus tradisi motor sport performa tinggi yang mengusung kecanggihan teknologi. Suzuki menerapkan prinsip filosofi terbaik ketika mengembangkan GSX-R sejak pertama kali, dan masih dipertahankan setiap Suzuki mengembangkan dan menciptakan model generasi berikutnya.</P>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

    <div class="modal fade" data-bs-backdrop="static" id="exampleModal2" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">GSX 250R</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Mesin GSX 250R memiliki kubikasi 248cc, 4-langkah, tipe 2 silinder, pendingin cair, DOHC, BBM injeksi, starter elektrik, dan transmisi 6-kecepatan. Mesin ini mampu menghasilkan daya maksimum sebesar 24,6 dk/8.000 rpm dan torsi puncak sebesar 23,4 Nm/6.500 rpm.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <div class="modal fade" data-bs-backdrop="static" id="exampleModal3" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">GSX-R1000</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Suzuki GSX-R1000 adalah motor sport dari seri sepeda motor Suzuki GSX-R. Motor ini diperkenalkan pada tahun 2001 untuk menggantikan GSX-R1100 dan didukung oleh liquid-cooled 999 cc (61,0 cu in) mesin 4 silinder segaris, putaran empat-tak.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    








    <div class="product" id="product">
      <section class="container">
        <h1 class="text-center">Motor</h1>
        
        <div>
    <div class="row">
          <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">GSX-R 150</h3>
                <img src="img/yellowgsx150.png" width="400px" class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Lihat Detail</button>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">GSX 250R</h3>
                <img src="img/gsx250.png" width="400px" class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Lihat Detail</button>
                </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">GSX-R1000</h3>
                <img src="img/gsx1000.png" width="400px" class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Lihat Detail</button>
                </div>
            </div>
          </div>
        </div>
        <br>
            
        </div>
</section>
</div>
    </body>
    </html>