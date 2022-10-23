<!doctype html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Indonesia News</title>
    <link rel="icon" type="image/png"  href="img/indonesia.png">
    
  </head>

  <body>
    <!-- Header -->
    <div class="page-content" style="margin-left:40px; margin-right:40px;">
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-3">
                    <img src = "img/logo.png" style="margin-top:10px;">
                </div>
                <div class="col-6" align="center">
                <form class="d-flex" role="search" style="margin-top:40px;">
                        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Cari</button>
                    </form>
                </div>
                <div class="col" align="right">
                    <div class="d-grid gap-2 d-md-block" style="margin-top:10px;">
                        <button class="btn btn-success btn-sm" type="button">Masuk</button>
                        <button class="btn btn-info btn-sm" type="button">Buat Berita</button>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-dark" style="margin-top:5px;">
        <div class="container-fluid">
        <img src = "img/indonesia.png" height="60" width="60">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color:white;">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Berita</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Entertainer<a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Otomotif</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Bisnis</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Gaya Hidup</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Showbiz</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Food & Travel</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Teknologi & Sains</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Olahraga</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Edukasi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Infografis</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Insight</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color:white;">Lainnya</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

            
        <?php
        $alamatAPI = "https://newsapi.org/v2/top-headlines?country=id&apiKey=4739ebf0aed441b4af4e3c5a7a951eb4";

        # ambil data json dari $alamatAPI
        $data = file_get_contents($alamatAPI);

        # parsing variabel $data ke dalam array
        $dataBerita = json_decode($data);
        
        ?>

        <div style="margin-top: 30px;">

        <?php
            if ($dataBerita->status === "ok") {
            # tampilkan menggunakan perulangan
            foreach ($dataBerita->articles as $berita) {
                echo "<h4><a href='{$berita->url}'>{$berita->title}</a></h4>";
            
                if ($berita->urlToImage) {
                    echo "<img style='width: 70rem' src='{$berita->urlToImage}'>";
                }
                
                echo "<p>{$berita->description}</p>";
                echo "<hr>";
            }
          }
        ?>
        </div>

        <!-- Footer -->
        <div class="container-fluid">
            <footer class="text-center text-lg-start text-white" style="background-color: gray">
                <div class="container p-4 pb-0">
                    <section class="">
                        <div class="row">
                            <div class=" col-lg-3 col-xl-3 mx-auto mt-3">
                                <img src = "img/logo.png" width="100%">
                            </div>
        
                            <hr class="w-100 clearfix d-md-none" />

                            <div class="col-md col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Kategori</h6>
                                    <p><a class="text-white">Berita</a></p>
                                    <p><a class="text-white">Entertainer</a></p>
                                    <p><a class="text-white">Bisnis & Travel</a></p>
                                    <p><a class="text-white">Teknologi & Sains</a></p>
                                    <p><a class="text-white">Lainnya</a></p>
                            </div>

                            <hr class="w-100 clearfix d-md-none" />

                            <div class="col-md col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">
                                   Informasi
                                </h6>   
                                <p> <a class="text-white">Redaksi</a></p>
                                <p><a class="text-white">Karir</a></p>
                                <p><a class="text-white">Kotak Pos</a></p>
                                <p><a class="text-white">Info Iklan</a></p>
                                <p><a class="text-white">Lainnya</a></p>
                            </div>

                            <hr class="w-100 clearfix d-md-none" />

                            <div class="col-md col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Kontak</h6>
                                <p><i class="fas fa-home mr-3"></i> Jakarta, Indonesia</p>
                                <p><i class="fas fa-envelope mr-3"></i> ibn@gmail.com</p>
                                <p><i class="fas fa-print mr-3"></i> 0394-345678</p>
                            </div>
                        </div>
                    </section>
    
                    <hr class="my-3">
                    <section class="p-3 pt-0">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-7 col-lg-8 text-center text-md-start">
                                <div class="p-3">
                                    © 2022 Copyright:
                                    <a class="text-white" href="https://mdbootstrap.com/">indonesiabreakingnews.com</a>
                                </div>
                            </div>

                            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                                    <i class="fab fa-facebook-f"></i></a>

                                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                                    <i class="fab fa-twitter"></i></a>

                                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                                    <i class="fab fa-google"></i></a>

                                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </section>
                </div>
            </footer>
        </div>
  </body>
</html>
