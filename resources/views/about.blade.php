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
    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="about.css">
    <title>About</title>




</head>

<body>
    <nav class="navbar navbar-expand-lg" style =" min-height: 10vh">
        <div class="container-fluid">
            <img class="logo m-0" src="/img/logoasset.png" alt="" onclick="window.location.href='/'">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center mx-auto ">
                    <li class="nav-item text-center">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <div class="ml-auto">
                        <button class="login-button" onclick="window.location.href='/login'" role="button">Log in</button>
                    </div>
                </span>
            </div>
        </div>
    </nav>

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example"
        tabindex="0">
        <h4 id="beranda"></h4>
        <div class="container-fluid container-lg overflow-hidden d-flex align-items-center"
            style="min-height: 90vh; padding-bottom: 10rem">
            <div class="  overflow-hidden ">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-12 order-lg-1 order-0 text-center  ">
                        <img style="width: 90%; min-width: 40%;" src="{{ asset('img\About\logoutama.png') }}"
                            alt="">
                    </div>
                    <div class="col-lg-5  order-lg-0 order-1 mt-lg-0 mt-3 text-center text-lg-start">
                        <div class="animationTeks1 " id="">
                            <section class="about-section" id="">
                                <h1>
                                    <span class="black">Membangun</span><br>
                                    <span class="red">Jembatan Kesehatan:</span><br>
                                    <span class="black">Dalam Pemantauan Kesehatan Masyarakat</span>
                                </h1>
                            </section>

                            <p class="text-center text-lg-start fs-4">
                            Di Infokesehatan24, kami hadir untuk memberikan solusi atas tantangan yang sering dihadapi dalam mendapatkan jadwal terkini dan mendapatkan bantuan kesehatan yang cepat.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section class="first-aid-section ">
            <h2 class="about_title mb-2 ml-3 "><b>About Us</b></h2>
            <p class="ml-3">Dapatkan informasi pemantauan rutin terhadap kondisi kesehatan masyarakat desa!</p>
        </section>
        

        <section class="information-section container d-flex justify-content-center " id="">
            <div class="card-container card-group gap-5 container-fluid d-flex justify-content-between align-items-stretch">
                <div class="card rounded-4 d-flex flex-column">
                    <!-- <img src="/img/Homepage/asset5.png" alt="RS Sentosa" style="width:30%;"> -->
                    
                    <div class="Hospital_detail">
                    <b class="section-title">Apa Yang Kami Berikan?</b>
                        <br>
                        <p>
                            <ul>
                            <li><b>Informasi Pertolongan Pertama:</b> Panduan lengkap tentang pertolongan pertama dalam situasi darurat untuk memberikan pengetahuan yang kritis di saat genting.</li>
                            <li><b>Jadwal Dokter di Puskesmas:</b>  Akses langsung untuk mengecek daftar dokter yang tersedia di berbagai puskesmas, memudahkan Anda untuk membuat janji atau mendapatkan bantuan medis.</li>
                            <li><b>Pemantauan Kesehatan:</b> Kemudahan dalam memantau kondisi kesehatan Anda sendiri dengan alat pemantauan yang tersedia, memberikan kontrol lebih atas kesehatan pribadi.</li>
                            </ul>
                            </p>
                    </div>
                </div>
                <div class="card rounded-4 d-flex flex-column">
                    <!-- <img src="/img/Homepage/asset6.png" alt="RS Sentosa" style="width:30%;"> -->
                    <div class="Hospital_detail">
                    <!-- <b class="section-title">Apa Yang Kami Berikan?</b> -->
                        <br>
                        <p>
                            <ul>
                                <li>Dengan kolaborasi antara teknologi dan pelayanan kesehatan, kami berkomitmen untuk menyediakan informasi yang relevan dan layanan yang memudahkan akses Anda untuk menjaga kesehatan dengan lebih baik. Dengan Infokesehatan24, kesehatan yang lebih baik menjadi lebih terjangkau dan teratur bagi semua.</li>
                            </ul>
                             </p>
                    </div>
                </div>

            </div>
            
            
        </section>
        
        <!-- style="max-width:60px;" -->
        <!-- img/Homepage/card1.png -->

        

        <section class="caution-section d-flex" id="contact">
            <div class="caution py-3 flex-fill ">
                <footer class="m-0">
                    <div class="footer-layout">
                        <div>
                            <img class="mt-3 " src="/img/logoasset.png" alt=""
                                style="width: 80%; min-width: 40%;">
                            <p class="footer-text-des"><br>PT. Info Kesehatan Indonesia</p>
                            <p class="footer-text-des">infokesehatan24@gmail.com</p>
                            <p class="footer-text-des">JL Palmerah Barat No. 5</p>
                            <p class="footer-text-des">082234146060</p>
                            <p class="footer-text-des">Jakarta, Indonesia</p>
                        </div>

                        <div class="mt-4">
                            <p class="fonts-bold fs-4 d-flex justify-content-center">About Us</p>
                            <p>Kami adalah sumber informasi kesehatan desa yang andal, <br>
                                menyediakan jadwal klinik dan hasil pemantauan <br>kesehatan untuk meningkatkan
                                kesejahteraan
                                masyarakat desa.</p>
                        </div>
                    </div>
                </footer>
            </div>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
