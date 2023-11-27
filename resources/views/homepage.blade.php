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


        <!-- <a class="navbar-brand" href="#">
            <img src="img/logoasset.png" alt="" style="width:80%; margin-left: 10px;">
        </a> -->
        <nav class="navbar">
            <div class="container-fluid">
            <div class="navbar-brand">
                <img src="img/logoasset.png" alt="Logo" class="Logo">
            </div>
            <div class="navbar-nav">
            <ul class="nav">
                
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    

    <div class="container-fluid container-lg overflow-hidden   ">
        <div class="container-fluid container-lg overflow-hidden " style="padding-bottom: 9rem">
            <div class="row align-items-center mt-5">
                <div class="col-lg-7 col-12 order-lg-1 order-0"> 
                    <img style="width: 90%; min-width: 40%;" src="{{ asset('img\Homepage\assetutama.png') }}" alt="">
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
                        Cek jadwal terkini layanan kesehatan yang ada di desa kamu. Membantu melakukan  pemantauan  informasi monitoring  kesehatan serta informasi perolongan pertama. 
                        </p>
                        <button class="btn btn-danger mt-3"><b>Cek Jadwal</b></button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    

    <section class="first-aid-section">
        <h2 class="mt-1 mb-4 ml-3"><b>Solusi Pertolongan Pertama</b></h2>
        <p class="ml-3">Luka ringan, penyakit menular, cedera, dan bisa ular, semua ada di Infokesehatan24!</p>
    </section>

  <section class="card-section">
    <div class="card-container row row-cols-1 row-cols-md-4 g-4 justify-content-center">
      <div class="col-md-3 mb-3">
        <a href="{{ route('lukaringan') }}" class="card text-center text-decoration-none">
          <img src="/img/Homepage/card1.png" class="card-img-top mx-auto d-block" alt="Card 1" style="width: 30%;">
          <div class="card-body">
            <p class="card-text" style="font-size:10px;"><b>Luka Ringan</b></p>
          </div>
        </a>
      </div>

      <div class="col-md-3 mb-3">
        <a href="{{ route('penyakitmenular') }}" class="card text-center text-decoration-none">
          <img src="/img/Homepage/card2.png" class="card-img-top mx-auto d-block" alt="Card 1" style="width: 30%;">
          <div class="card-body">
            <p class="card-text" style="font-size:10px;"><b>Penyakit Menular</b></p>
          </div>
        </a>
      </div>

      <div class="col-md-3 mb-3">
        <a href="{{ route('cidera') }}" class="card text-center text-decoration-none">
          <img src="/img/Homepage/card3.png" class="card-img-top mx-auto d-block" alt="Card 1" style="width: 30%;">
          <div class="card-body">
            <p class="card-text" style="font-size:10px;"><b>Cidera</b></p>
          </div>
        </a>
      </div>

      <div class="col-md-3 mb-3">
        <a href="{{ route('bisaular') }}" class="card text-center text-decoration-none">
          <img src="/img/Homepage/card4.png" class="card-img-top mx-auto d-block" alt="Card 1" style="width: 30%;">
          <div class="card-body">
            <p class="card-text" style="font-size:10px; text-align:center;"><b>Bisa Ular</b></p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- <section class="card-section">
    <div class="card-container row row-cols-1 row-cols-md-4 g-4 justify-content-center">

        <div class="col-md-3 mb-3">
            <div class="card text-center text-decoration-none">
                <img src="/path/to/image1.jpg" class="card-img-top mx-auto d-block" alt="Card 1" style="width: 80%;">
                <div class="card-body">
                    <p class="card-text" style="font-size: 12px;"><b>Cidera</b></p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card text-center text-decoration-none">
                <img src="/path/to/image2.jpg" class="card-img-top mx-auto d-block" alt="Card 2" style="width: 80%;">
                <div class="card-body">
                    <p class="card-text" style="font-size: 12px;"><b>Cidera</b></p>
                </div>
            </div>
        </div>


        <div class="col-md-3 mb-3">
            <div class="card text-center text-decoration-none">
                <img src="/path/to/image3.jpg" class="card-img-top mx-auto d-block" alt="Card 3" style="width: 80%;">
                <div class="card-body">
                    <p class="card-text" style="font-size: 12px;"><b>Cidera</b></p>
                </div>
            </div>
        </div>


        <div class="col-md-3 mb-3">
            <div class="card text-center text-decoration-none">
                <img src="/path/to/image4.jpg" class="card-img-top mx-auto d-block" alt="Card 4" style="width: 80%;">
                <div class="card-body">
                    <p class="card-text" style="font-size: 12px;"><b>Cidera</b></p>
                </div>
            </div>
        </div>
    </div>
</section> -->






  
    <section class="first-aid-section">
        <h2 class="mt-1 mb-4 ml-3"><b>Rangkuman Hasil Monitoring</b></h2>
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

    <section class="caution-section d-flex ">
        <div class="caution py-3"> 
            <p class="m-0 ">Peringatan jika Anda sedang mengalami penyakit yang mengganggu kesehatan, layanan ini tidak
            direkomendasikan untuk Anda. Silahkan menghubungi 119</p>
        </div>
    </section>
</body>

</html>


