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
            <div class="row align-items-center mt-5 flex-row-reverse">
                <div class="col d-flex justify-content-center align-items-center m-0  "> <!-- Tambahkan kelas col-lg-7 di sini -->
                    <img style="width: 100%; min-width: 40%;" src="{{ asset('img/bisa ular/bisaular.png') }}" alt="">
                </div>
                <div class="col-lg-5  order-lg-0 order-1 mt-lg-0 mt-3 text-center text-lg-start">
                    <!-- Tambahkan kelas col-lg-5 di sini -->
                    <div class="animationTeks1 " id="">
                        <section class="about-section" id="">
                            <h1>
                                <span class="black fonts-bold">Mengenai</span>
                                <span class="red fonts-bold">Bisa Ular </span><br>
                                <span class="black fonts-bold">dan Pertolongan Pertamanya</span>
                            </h1>
                        </section>

                        <p class="text-center text-lg-start fs-5">
                        Terinfeksi bisa ular mungkin jarang terjadi, namun perlu diingat pertolongan pertama yang cepat dan tepat dapat mencegah dampak yang lebih fatal. Kehilangan nyawa menjadi salah satu dampak ketika insiden ini tidak ditangani dengan serius.

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
                        Di tengah masyarakat Indonesia, pengetahuan mengenai penanganan pertama terinfeksi bisa ular masih tergolong kurang.
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #E9C46A ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection1.png" style="width:50px;">
                        Berdasarkan buku “Guidelines For Management Of 2 Snake Bites”, Indonesia mencatat 20 kematian pertahun akibat gigitan ular.
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #E9C46A ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logo3.png" style="width:50px;">
                        Terinfeksi bisa ular memerlukan penanganan pertama yang tepat dan perlu ditindaklanjuti ke instansi kesehatan terdekat.
                    </div>
                </div>
            </div>
        </div>

        <div class="container rounded-top-5" style="">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-flex justify-content-center align-items-center m-0 ">
                    <img src="/img/bisa ular/asset1.png" class="cidera1 m-0 h-75 w-75  " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <p class="fonts-bold fs-4 fw-bolder">Macam - Macam Toksin dari Bisa Ular: </p>
                    <ul class="cideralist1  m-0">
                        <li>Neurotoksin (menyerang sistem saraf)</li>
                        <li>Hemotoksin (menyerang sistem peredaran darah)</li>
                        <li>Kardiotoksin (menyerang jantung)</li>
                        <li>Nefrotoksin (menyerang ginjal)</li>
                        <li>Sitotoksin (menyerang sel)</li>
                        <li>Nekrotoksin (menyebabkan kematian sel)</li>
                        <li>Miotoksin (menyerang otot)</li>
                        
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-flex justify-content-center  align-items-center m-0">
                    <img src="/img/bisa ular/asset2.png" class="cidera1 m-0 h-75 w-75  " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <p class="fonts-bold fs-4 fw-bolder m-0">Yang Harus Dilakukan Pertama Ketika Terkena Bisa Ular:</p>
                    <ul class="cideralist1  m-0 py-3">
                        <li>Pastikan korban tetap tenang.</li>
                        <li>Minimalkan gerakan korban agar bisa tidak cepat menyebar.</li>
                        <li>Jaga area gigitan tetap berada di bawah jantung.</li>
                        <li>Lepaskan seluruh benda di sekitar luka gigitan.</li>
                        <li>Tutupi gigitan dengan perban bersih.</li>
                        <li>Segera hubungi Ambulans.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container rounded-top-5 " style="">
        <div class="row row-cols-1 row-cols-md-2 g-4 flex-row-reverse">
            <div class="col d-flex align-items-center justify-content-center">
                <img src="/img/bisa ular/bisaularbawah.png" class="cidera1 m-0 h-75 w-75">
            </div>
            <div class="col d-flex flex-column  justify-content-center">
                <p class="fonts-bold fs-4 fw-bolder m-0">Penting Untuk Diingat Ketika Terinfeksi Bisa Ular:</p>
                <ul class="cideralist1  text-left m-0 py-3">
                        <li>Jangan mengikat bagian tubuh tertentu.</li>
                        <li>Jangan menyentuh lokasi gigitan ular.</li>
                        <li>Jangan mencoba menghisap bisa ular.</li>
                        <li>Jangan memotong area gigitan.</li>
                        <li>Jangan memberikan obat-obatan tanpa resep dokter.</li>   
                </ul>
            </div>
        </div>
        
    </div>

    @include('alamat-rumahsakit')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
