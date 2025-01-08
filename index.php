<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>daily journal</title>

    <link rel="stylesheet" href="style.css">

    <!-- Link Botstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="icon" href="img/decul.jpeg" />
</head>

<body>
    <!-- Navabar - Start -->
    <nav class="navbar navbar-expand-lg bg-success-subtle sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Daily Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="#gallery">Gallery</a>
                    </li>
                    <!--tambahan untuk jadwal -->
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="#Schedule">Schedule</a>
                    </li>
                    <!-- tambahan untuk profile  -->
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="#Profile">About Me</a>
                    </li>
                    <!-- tambahan untuk login -->
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-secondary" id="toggle-dark-mode">
                            Dark Mode
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar - End -->

    <!-- Section Home - Start -->
    <section id="hero" class="text-center p-5 bg-success-subtle text-sm-start rounded-4 m-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6 hero-text">
                    <h1>Pembantaian LALIGA</h1>
                    <p>
                        Dalam 2024 Real Madird terbantai oleh barcelona dengan skor 4-0
                    </p>
                </div>
                <div class="col-lg-5 col-md-6 hero-img p-5">
                    <img src="img/decul.jpeg" alt="Memory Image" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- Section Home - End -->

    <!-- Section Article - Start -->
    <!-- <section id="article" class="text-center p-5 rounded-4 m-2">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Article</h1>
      </div>
      <div class="row row-cols-4 row-cols-md-4 g-5 justify-content-center">
        <div class="col">
          <div class="card h-100">
            <img src="img/mu-6.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Manchester United</h5>
              <p class="card-text">
                Sejarah dan Perjalanan Klub Legendaris Manchester United
                Football Club, yang akrab disebut sebagai Manchester United atau
                hanya MU, adalah salah satu klub sepak bola paling terkenal dan
                sukses di dunia. Klub yang bermarkas di Old Trafford,
                Manchester, Inggris ini memiliki sejarah panjang yang penuh
                prestasi dan tantangan.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary"
                >last update 10 years ago</small
              >
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/mu-6.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Dominasi di Era Sir Alex Ferguson</h5>
              <p class="card-text">
                Sir Alex Ferguson adalah sosok yang membawa Manchester United ke
                puncak kejayaan modern. Di bawah kepemimpinannya, klub
                memenangkan 13 gelar Liga Inggris, 2 trofi Liga Champions, dan
                berbagai penghargaan lainnya. Ferguson juga dikenal karena
                kemampuannya mengembangkan pemain muda seperti Ryan Giggs, Paul
                Scholes, hingga generasi "Class of '92."
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">last update 2 years ago</small>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/mu-7.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Visi Masa Depan Manchester United</h5>
              <p class="card-text">
                Visi Masa Depan Meski tantangan terus berdatangan, Manchester
                United tetap berusaha untuk kembali ke puncak. Dengan kombinasi
                pemain muda berbakat, bintang internasional, dan strategi yang
                tepat, klub ini memiliki potensi untuk terus bersinar di
                panggung sepak bola global.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">last update 3 years ago</small>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/mu-8.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Perjalana Pasca era Ferguson</h5>
              <p class="card-text">
                Perjalanan Pasca-Ferguson Setelah pensiunnya Ferguson pada tahun
                2013, Manchester United mengalami masa transisi yang penuh
                tantangan. Pergantian beberapa manajer, termasuk David Moyes,
                Louis van Gaal, dan Jose Mourinho, menunjukkan betapa sulitnya
                mempertahankan konsistensi. Meskipun begitu, klub tetap berhasil
                meraih sejumlah trofi, seperti Liga Europa dan Piala FA.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">last update 1 years ago</small>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- article begin -->
    <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["judul"]?></h5>
                            <p class="card-text">
                                <?= $row["isi"]?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">
                                <?= $row["tanggal"]?>
                            </small>
                        </div>
                    </div>
                </div>
                <?php
      }
      ?>
            </div>
        </div>
    </section>
    <!-- article end -->
    <!-- Section Article - End -->

    <!-- Section Schedule - Start -->
    <section id="Schedule" class="text-center p-4 rounded-4 m-2">
        <div class="container">
            <h1 class="Schedule" class="fw-bold-4 pb-3">
                Jadwal Kuliah & Kegiatan Mahasiswa
            </h1>
            <div class="row row-cols-4 row-cols-md-4 g-5 start-end">
                <div class="col">
                    <div class="card h-100 border-primary mb-3" style="max-width: 18rem">
                        <div class="card-header bg-primary">Senin</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">09:00 - 10:30</h5>
                            <p class="card-text">
                                Basis Data <br />
                                ruang H.3.4
                            </p>
                            <h5 class="card-title">09:00 - 10:30</h5>
                            <p class="card-text">
                                Basis Data <br />
                                ruang H.3.4
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 mb-3" style="max-width: 18rem">
                        <div class="card-header bg-secondary">Selasa</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">08:00 - 09:30</h5>
                            <p class="card-text">
                                Pemrograman Berbasis Web <br />
                                Ruang D.2.J
                            </p>
                            <h5 class="card-title">08:00 - 09:30</h5>
                            <p class="card-text">
                                Pemrograman Berbasis Web <br />
                                Ruang D.2.J
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-success mb-3" style="max-width: 18rem">
                        <div class="card-header bg-success">Rabu</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">10:00 - 12:00</h5>
                            <p class="card-text">
                                Pemrograman berbasis object <br />
                                ruangan D.2.A
                            </p>
                            <h5 class="card-title">10:00 - 12:00</h5>
                            <p class="card-text">
                                Pemrograman berbasis object <br />
                                ruangan D.2.A
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-danger mb-3" style="max-width: 18rem">
                        <div class="card-header bg-danger">Kamis</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">08:00 - 10:00</h5>
                            <p class="card-text">
                                Pengantar teknologi Informasi <br />
                                ruang D.3.N
                            </p>
                            <h5 class="card-title">08:00 - 10:00</h5>
                            <p class="card-text">
                                Pengantar teknologi Informasi <br />
                                ruang D.3.N
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-warning mb-3" style="max-width: 18rem">
                        <div class="card-header bg-warning">Jumat</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">09:00 - 11:00</h5>
                            <p class="card-text">
                                Data Mining <br />
                                ruang G.2.3
                            </p>
                            <h5 class="card-title">09:00 - 11:00</h5>
                            <p class="card-text">
                                Data Mining <br />
                                ruang G.2.3
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-info mb-3" style="max-width: 18rem">
                        <div class="card-header bg-info">sabtu</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">08:00 - 10:00</h5>
                            <p class="card-text">Bimbingan karir online</p>
                            <h5 class="card-title">08:00 - 10:00</h5>
                            <p class="card-text">Bimbingan karir online</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-dark mb-3" style="max-width: 18rem">
                        <div class="card-header bg-dark text-light">Minggu</div>
                        <div class="card-body text-kight">
                            <h5 class="card-title">TIDAK ADA JADWAL</h5>
                            <p class="card-text">tidak ada jadwal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Schedule - End -->

    <!-- Section About Me - Start -->
    <section id="Profile" class="p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3 text-center">Profile Mahasiswa</h1>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-3 text-center">
                    <img src="img/photo-profile.jpeg" alt="" class="rounded-circle m-3" width="300" />
                </div>
                <div class="col-md-5">
                    <div class="">
                        <h4 class="text-center pb-3">Dhion Nur Damanhuri</h4>
                        <h5 class="text-center text-secondary">
                            Mahasiswa Teknik Informatika
                        </h5>
                    </div>
                    <div class="mt-3 text-center">
                        <tr>
                            <td><b>NIM</b> :</td>
                            <td>A11.2023.15448</td>
                        </tr>
                        <br />
                        <tr>
                            <td><b>Program Studi</b> : Teknik Informatika</td>
                        </tr>
                        <br />
                        <tr>
                            <td><b>Email</b> : ManchesterIsRed@gmail.com</td>
                        </tr>
                        <br />
                        <tr>
                            <td><b>Telepon</b> : 0895422528428</td>
                        </tr>
                        <br />
                        <tr>
                            <td><b>Alamat</b> : Jl. tlogobayem Semarang Tengah</td>
                        </tr>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section About Me - End -->

    <!-- Section Gallery - Start -->
    <section id="gallery" class="text-center p-5 bg-success-subtle rounded-4 m-4">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        </div>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/mu-6.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="img/mu-7.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="img/mu-8.jpg" class="d-block w-100" alt="..." />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Section Gallery - End -->

    <!-- Footer - Start -->
    <footer class="text-center p-5">
        <div>
            <i class="bi bi-whatsapp h2 p-2 text-dark"></i>
            <i class="bi bi-twitter h2 p-2 text-dark"></i>
            <i class="bi bi-instagram h2 p-2 text-dark"></i>
        </div>
        <div>Dhion Nur Damanhuri <i class="bi bi-c-circle"></i> 2024</div>
    </footer>
    <!-- Footer - End -->

    <script src="themeSwitcher.js"></script>

    <!-- Link JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>