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
     <style>
        @font-face {
            font-family: "PlusJakartaSans-bold";
            src: {{ asset('fonts/PlusJakartaSans-Bold.ttf') }}
            
        }
        .fonts-bold {
            font-family: 'PlusJakartaSans-bold';

        }
        @font-face {
            font-family: "PlusJakartaSans-Medium";
            src: {{ asset('fonts/PlusJakartaSans-Medium.ttf') }}
            
        }
        .fonts-medium {
            font-family: 'PlusJakartaSans-Medium';

        }
    </style>

    <link rel="stylesheet" href="Page_Style.css">
    <title>Solusi Penolongan Pertama</title>

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
                            <li class="nav-item text-center d-flex justify-content-start contNav">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }} ">Home</a>
                            </li>
                            <li class="nav-item contNav">
                                <a class="nav-link" href="{{ url('/about') }}">About</a>
                            </li>
                            <li class="nav-item contNav">
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

    <div class="container-fluid container-lg overflow-hidden   ">
        <div class="container-fluid container-lg overflow-hidden " style="padding-bottom: 9rem">
            <div class="row align-items-center mt-5">
                <div class="col-lg-7 col-12 order-lg-1 order-0"> <!-- Tambahkan kelas col-lg-7 di sini -->
                    <img style="width: 100%; min-width: 40%;" src="{{ asset('img/penyakitnular.png') }}" alt="">
                </div>
                <div class="col-lg-5  order-lg-0 order-1 mt-lg-0 mt-3 text-center text-lg-start">
                    <!-- Tambahkan kelas col-lg-5 di sini -->
                    <div class="animationTeks1 " id="">
                        <section class="about-section" id="">
                            <h1>
                                <span class="black fonts-bold">Seputar</span><br>
                                <span class="red fonts-bold">Penyakit Menular</span><br>
                                <span class="black fonts-bold">Untuk Hidup Sehat</span>
                            </h1>
                        </section>

                        <p class="text-center text-lg-start fs-5 ">
                            Dalam informasi ini kita dapat mengeksplorasi berbagai aspek penyakit menular, termasuk cara
                            penularannya, faktor risiko, dan upaya-upaya pencegahan yang dapat kita lakukan. Peduli
                            terhadap kesehatan kita dan komunitas kita adalah langkah awal menuju kehidupan yang lebih
                            aman dan sehat.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="info-section rounded-4">
        <!-- Isi untuk bagian Info -->
        <div class="container " style = "transform: translateY(-6rem); ">
            <div class="card-group gap-5 ">
                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px; background-color: #E9C46A ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection.png" style="width:50px;">
                         Penyakit menular adalah ancaman serius bagi kesehatan global, dan merupakan penyebab  kematian di seluruh 
                         dunia.
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #E9C46A ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection1.png" style="width:50px;">
                        Menurut World Health Organization (WHO), usia 20-30 tahun merupakan rentang usia yang rentan terhadap banyak penyakit menular.
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #E9C46A ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logo3.png" style="width:50px;">
                        Mari bersama menjaga kesehatan dan mencegah penyakit menular. 
                    </div>
                </div>
            </div>
        </div>

        <div class="container rounded-top-5" style="">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-flex justify-content-center align-items-center m-0 ">
                    <img src="/img/Penyakit menular/asset1.png" class="cidera1 m-0 h-75 w-75  " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <p class="fonts-bold fs-4 fw-bolder" >Macam - macam Penyakit Menular:</p>
                    <ul class="cideralist1 m-0 ">
                        <li>Tuberkulosis</li>
                        <li>Demam dengue (DBD) </li>
                        <li>Infeksi saluran pernapasan akut (ISPA)</li>
                        <li>Difteri </li>
                        <li>Penyakit kulit </li>
                        <li>Malaria</li>
                        <li>Acquired Immune Deficiency Syndrome (AIDS)</li>
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-flex justify-content-center  align-items-center m-0">
                    <img src="/img/Penyakit menular/asset2.png" class="cidera1 m-0 h-75 w-75 py-3 " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <p class="fonts-bold fs-4 fw-bolder m-0">Penyakit Menular Sendiri adalah Infeksi yang Disebabkan Oleh Mikro Organisme:</p>
                    <ul class="cideralist1 m-0 py-3 ">
                        <li>Virus</li>
                        <li>Bakteri</li>
                        <li>Jamur</li>
                        <li>Parasit</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

{{-- kanan menggunakan revers --}}
    <div class="container rounded-top-5 " style="">
        <div class="row row-cols-1 row-cols-md-2 g-4 flex-row-reverse">
            <div class="col d-flex align-items-center justify-content-center ">
                <img src="/img/Penyakit menular/gamba1.png" class="cidera1 m-0 h-75 w-75">
            </div>
            <div class="col d-flex flex-column  justify-content-center">
                <p class="fonts-bold fs-4 fw-bolder m-0">Cara Mengatasi Penyakit Menular:</p>
                <ul class="cideralist1  text-left m-0 py-3 ">
                        <li>Mengurangi kontak dengan orang yang sakit.</li>
                        <li>Mengurangi kontak dengan binatang pembawa penyakit.</li>
                        <li>Mengenakan masker.</li>
                        <li>Tidak mengunjungi tempat yang sedang terdapat wabah.</li>   
                </ul>
            </div>
        </div>
        
    </div>

    @include('alamat-rumahsakit')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
