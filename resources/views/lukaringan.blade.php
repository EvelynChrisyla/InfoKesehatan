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
    <nav class="navbar navbar-expand-lg ">
        <img class="logo" src="/img/logoasset.png" alt="">
    </nav>
    <div class="container-fluid container-lg overflow-hidden   ">
        <div class="container-fluid container-lg overflow-hidden " style="padding-bottom: 9rem">
            <div class="row align-items-center mt-5">
                <div class="col-lg-7 col-12 order-lg-1 order-0"> <!-- Tambahkan kelas col-lg-7 di sini -->
                    <img style="width: 100%; min-width: 40%;" src="{{ asset('img/Lukaringan/CideraAsset1.png') }}" alt="">
                </div>
                <div class="col-lg-5  order-lg-0 order-1 mt-lg-0 mt-3 text-center text-lg-start">
                    <!-- Tambahkan kelas col-lg-5 di sini -->
                    <div class="animationTeks1 " id="">
                        <section class="about-section" id="">
                            <h1>
                                <span class="black fonts-bold">Seputar</span><br>
                                <span class="red fonts-bold">Luka Ringan</span><br>
                                <span class="black fonts-bold">dan Cara Mengobatinya</span>
                            </h1>
                        </section>

                        <p class="text-center text-lg-start fs-5">
                        Luka ringan dapat terjadi ketika terjadi robekan pada permukaan kulit.. Walaupun luka ringan adalah penyakit yang tidak serius, terbukanya kulit dapat menyebabkan infeksi yang disebabkan oleh bakteri yang masuk kedalamnya.
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
                            Luka ringan sering kali diabaikan, tetapi sebenarnya bisa menjadi sumber masalah serius jika tidak diobati dengan benar
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #E9C46A ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection1.png" style="width:50px;">
                            Menurut CDC, luka ringan yang diabaikan dapat meningkatkan risiko infeksi dan komplikasi, terutama pada usia 20-30 tahun.
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #E9C46A ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logo3.png" style="width:50px;">
                            Umumnya, luka ringan tidak memerlukan penanganan serius sehingga dapat di tolong dengan pertolongan pertama saja
                    </div>
                </div>
            </div>
        </div>

        <div class="container rounded-top-5" style="">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-flex justify-content-center align-items-center m-0 ">
                    <img src="/img/Lukaringan/asset1.png" class="cidera1 m-0 h-75 w-75  " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <p class="fonts-bold fs-4 fw-bolder">Macam - Macam Luka Ringan:</p>
                    <ul class="cideralist1 m-0 ">
                        <li>Luka Lecet</li>
                        <li>Luka Sayat </li>
                        <li>Luka Robe</li>
                        <li>Luka Bakar</li>
                        <li>Luka Tusuk</li>
                        <li>Luka Bedah </li>
                        
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-flex justify-content-center  align-items-center m-0">
                    <img src="/img/Lukaringan/asset2.png" class="cidera1 m-0 h-75 w-75  " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <p class="fonts-bold fs-4 fw-bolder m-0">Tahapan Pertolongan Pertama Apabila Mengalami Luka Ringan:</p>
                    <ul class="cideralist1 m-0 py-3">
                        <li>Cuci tangan  untuk mencegahi infeksi.</li>
                        <li>Bersihkan luka menggunakan air yang mengalir.</li>
                        <li>Keringkan Luka.</li>
                        <li>Tutup luka dengan kassa steril, gunakan plester untuk merekatkan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

{{-- kanan menggunakan revers --}}
    <div class="container rounded-top-5 " style="">
        <div class="row row-cols-1 row-cols-md-2 g-4 flex-row-reverse">
            <div class="col d-flex align-items-center justify-content-center">
                <img src="/img/Lukaringan/lukaringanbawah.png" class="cidera1 m-0 h-75 w-75">
            </div>
            <div class="col d-flex flex-column  justify-content-center">
                <p class="fonts-bold fs-4 fw-bolder m-0">Obat untuk Mengatasi Luka Ringan:</p>
                <ul class="cideralist1   text-left m-0 py-3 ">
                        <li>Povidone Iodine (Betadine)</li>
                        <li>Cedexomer Iodine (Iodosrb)</li>
                        <li>Bacitracin</li>
                        <li>Neosporin</li>
                        <li>Silver Sulfadiazine</li>   
                </ul>
            </div>
        </div>
        
    </div>

    <section class="information-section " id="">
        <p class="fw-bolder fs-2 fonts-bold">Alamat Klinik atau Rumah Sakit</p>
        <div class="card-container card-group gap-5 container-fluid   ">
            <div class="card rounded-4">
                <b>RS Medika Permata Hijau</b>
                <img src="/img/hospital_Photo.png" alt="RS Sentosa">
                <div class="Hospital_detail">
                    <div><b>Alamat:</b> Jl. Raya Kby. Lama No.64, RT.1/RW.8, Sukabumi Sel., Kec. Kb. Jeruk, Kota Jakarta
                        Barat, Daerah Khusus Ibukota Jakarta 11560</div>
                    <div><b>Jam Buka:</b> Buka 24 jam</div>
                    <div><b>Provinsi:</b> Jakarta</div>
                    <div><b>Telepon:</b> 0819-0550-6159</div>
                </div>
            </div>

            <div class="card rounded-4">
                <b>RS Sehat Bahagia</b>
                <img src="/img/hospital_Photo.png" alt="RS Sentosa">
                <div class="Hospital_detail">
                    <div><b>Alamat:</b> Jl. Raya Kby. Lama No.64, RT.1/RW.8, Sukabumi Sel., Kec. Kb. Jeruk, Kota Jakarta
                        Barat, Daerah Khusus Ibukota Jakarta 11560</div>
                    <div><b>Jam Buka:</b> Buka 24 jam</div>
                    <div><b>Provinsi:</b> Jakarta</div>
                    <div><b>Telepon:</b> 0819-0550-6159</div>
                </div>

            </div>

            <div class="card rounded-4">
                <b>RS Sentosa</b>
                <img src="/img/hospital_Photo.png" alt="RS Sentosa">
                <div class="Hospital_detail">
                    <div><b>Alamat:</b> Jl. Raya Kby. Lama No.64, RT.1/RW.8, Sukabumi Sel., Kec. Kb. Jeruk, Kota Jakarta
                        Barat, Daerah Khusus Ibukota Jakarta 11560</div>
                    <div><b>Jam Buka:</b> Buka 24 jam</div>
                    <div><b>Provinsi:</b> Jakarta</div>
                    <div><b>Telepon:</b> 0819-0550-6159</div>
                </div>
            </div>
        </div>
    </section>

    <section class="caution-section d-flex ">
        <div class="caution py-3"> <p class="m-0 ">Peringatan jika Anda sedang mengalami penyakit yang mengganggu kesehatan, layanan ini tidak
            direkomendasikan untuk Anda. Silahkan menghubungi 119</p></div>
    </section>
</body>

</html>
