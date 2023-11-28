<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="homepageStyle.css">
    <title>Home Page</title>

</head>
<body>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <img class="logo m-0" src="/img/logoasset.png" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center mx-auto ">
        <li class="nav-item text-center">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
      </ul>
      <span class="navbar-text">
        <div class="ml-auto">
          <button class="login-button" href="login" role="button">Log in</button>
        </div>
      </span>
    </div>
  </div>
</nav>

<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <h4 id="beranda"></h4>
    <p>
    <div class="container-fluid container-lg overflow-hidden   ">
        <div class="container-fluid container-lg overflow-hidden " style="padding-bottom: 9rem">
            <div class="row align-items-center mt-5">
                <div class="col-lg-7 col-12 order-lg-1 order-0 text-center  ">
                    <img style="width: 90%; min-width: 40%;" src="{{ asset('img\Homepage\assetutama.png') }}"
                        alt="">
                </div>
                <div class="col-lg-5  order-lg-0 order-1 mt-lg-0 mt-3 text-center text-lg-start">
                    <div class="animationTeks1 " id="">
                        <section class="about-section" id="">
                            <h1>
                                <span class="black">Masa Depan </span><br>
                                <span class="red">Kesehatan Desa</span><br>
                                <span class="black">yang Lebih Baik </span>
                            </h1>
                        </section>

                        <p class="text-center text-lg-start fs-5">
                            Cek jadwal terkini layanan kesehatan yang ada di desa kamu. Membantu melakukan pemantauan
                            informasi monitoring kesehatan serta informasi perolongan pertama.
                        </p>
                        <button class="btn btn-danger mt-3"><b>Cek Jadwal</b></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </p>

    <h4 id="tentang"></h4>
    <p>
    <section class="first-aid-section">
        <h2 class="mt-1 mb-2 ml-3"><b>Solusi Pertolongan Pertama</b></h2>
        <p class="ml-3">Luka ringan, penyakit menular, cedera, dan bisa ular, semua ada di Infokesehatan24!</p>
    </section>

    <section class="card-section">
        <div class="card-container row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            <div class="col-md-3 mb-3">
                <a href="{{ route('lukaringan') }}" class="card text-center text-decoration-none">
                    <img src="/img/Homepage/card1.png" class="card-img-top mx-auto d-block" alt="Card 1"
                        style="width: 30%;">
                    <div class="card-body">
                        <p class="card-text" style="font-size:10px;"><b>Luka Ringan</b></p>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="{{ route('penyakitmenular') }}" class="card text-center text-decoration-none">
                    <img src="/img/Homepage/card2.png" class="card-img-top mx-auto d-block" alt="Card 1"
                        style="width: 30%;">
                    <div class="card-body">
                        <p class="card-text" style="font-size:10px;"><b>Penyakit Menular</b></p>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="{{ route('cidera') }}" class="card text-center text-decoration-none">
                    <img src="/img/Homepage/card3.png" class="card-img-top mx-auto d-block" alt="Card 1"
                        style="width: 30%;">
                    <div class="card-body">
                        <p class="card-text" style="font-size:10px;"><b>Cidera</b></p>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-3">
                <a href="{{ route('bisaular') }}" class="card text-center text-decoration-none">
                    <img src="/img/Homepage/card4.png" class="card-img-top mx-auto d-block" alt="Card 1"
                        style="width: 30%;">
                    <div class="card-body">
                        <p class="card-text" style="font-size:10px; text-align:center;"><b>Bisa Ular</b></p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="first-aid-section">
        <h2 class="mt-1 mb-2 ml-3"><b>Rangkuman Hasil Monitoring</b></h2>
        <p class="ml-3">Dapatkan informasi pemantauan rutin terhadap kondisi kesehatan masyarakat desa!</p>
    </section>

    <section class="information-section " id="">

        <div class="card-container card-group gap-5 container-fluid">
            <div class="card rounded-4">
                <img src="/img/Homepage/asset5.png" alt="RS Sentosa" style="width:20%;">
                <b>Posyandu</b>
                <div class="Hospital_detail">
                    <br>
                    <p>
                        Data terbaru per 1 October 2023!:
                        <li>Terdapat 20 bayi laki-laki</li>
                        <li>Terdapat 17 bayi perempuan</li>
                        <li>Bayi stunting : 7</li>
                        <li>Bayi normal : 30</li>
                    </p>
                </div>
            </div>

            <div class="card rounded-4">
                <img src="/img/Homepage/asset6.png" alt="RS Sentosa" style="width:20%;">
                <b>Klinik</b>
                <div class="Hospital_detail">
                    <br>
                    <p>
                        Data terbaru per 1 October 2023!:
                        <li>Terdapat 2 orang penderita diabetes</li>
                        <li>Terdapat 1 orang terkena demam berdarah</li>
                        <li>Terdapat 2 orang menderita covid-19</li>
                    </p>
                </div>

            </div>
        </div>
    </section>
    </p>

    <h4 id="kontak"></h4>
    <p>
    <section class="caution-section d-flex ">
        <div class="caution py-3">
            <footer class="m-0">
                <div class="footer-layout">
                    <div style="padding-right: 800px">
                        <img src="/img/logoasset.png" alt=""
                            style="padding-bottom: 10px; padding-top: 40px; width:80%;">
                        <p class="footer-text-des">PT. Info Kesehatan Indonesia</p>
                        <p class="footer-text-des">infokesehatan24@gmail.com</p>
                        <p class="footer-text-des">JL Palmerah Barat No. 5</p>
                        <p class="footer-text-des">082234146060</p>
                        <p class="footer-text-des">Jakarta, Indonesia</p>
                    </div>

                    <div class="about-us">
                        <p class="footer-text-about-us-title">About Us</p>
                        <p class="footer-text-about-us-des">Kami adalah sumber informasi kesehatan desa yang andal,
                            menyediakan jadwal klinik dan hasil pemantauan kesehatan untuk meningkatkan kesejahteraan
                            masyarakat desa.</p>
                    </div>
                </div>
            </footer>
        </div>
    </section>
</div>

    <!-- <img id="background-image" src="img\Homepage\backgroundelipse1.png" alt="Background Image"> -->
    <section id="background-section">
        <img id="background-image" src="img\Homepage\backgroundelipse1.png" alt="Background Image">
    </section>

</body>

</html>
