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

    <link rel="stylesheet" href="Page_Style.css">
    <title>Login</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <img class="logo" src="/img/logoasset.png" alt="">
    </nav>
    <div class="container-fluid container-lg overflow-hidden   ">
        <div class="container-fluid container-lg overflow-hidden " style="padding-bottom: 9rem">
            <div class="row align-items-center mt-5">
                <div class="col-lg-7 col-12 order-lg-1 order-0"> <!-- Tambahkan kelas col-lg-7 di sini -->
                    <img style="width: 100%; min-width: 40%;" src="{{ asset('img/bisa ular/assetutama.png') }}" alt="">
                </div>
                <div class="col-lg-5  order-lg-0 order-1 mt-lg-0 mt-3 text-center text-lg-start">
                    <!-- Tambahkan kelas col-lg-5 di sini -->
                    <div class="animationTeks1 " id="">
                        <section class="about-section" id="">
                            <h1>
                                <span class="black">Mengenai</span><br>
                                <span class="red">Bisa Ular </span><br>
                                <span class="black">dan Pertolongan Pertamanya</span>
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
                    style="margin-top: 30px; margin-bottom: 10px; background-color: #D9D9D9 ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection.png" style="width:50px;">
                        Di tengah masyarakat Indonesia, pengetahuan mengenai penanganan pertama terinfeksi bisa ular masih tergolong kurang.
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #D9D9D9 ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection1.png" style="width:50px;">
                        Berdasarkan buku “Guidelines For Management Of 2 Snake Bites”, Indonesia mencatat 20 kematian pertahun akibat gigitan ular.
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #D9D9D9 ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection2.png" style="width:50px;">
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
                    <b>Macam - Macam Toksin dari Bisa Ular: </b>
                    <ul class="cideralist1">
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
                    <b>Yang Harus Dilakukan Pertama Ketika Terkena Bisa Ular:</b>
                    <ul class="cideralist1">
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
                <img src="/img/bisa ular/asset3.png" class="cidera1 m-0 h-75 w-75">
            </div>
            <div class="col d-flex flex-column  justify-content-center">
                <b>Penting Untuk Diingat Ketika Terinfeksi Bisa Ular:</b>
                <ul class="cideralist1  text-left">
                        <li>Jangan mengikat bagian tubuh tertentu.</li>
                        <li>Jangan menyentuh lokasi gigitan ular.</li>
                        <li>Jangan mencoba menghisap bisa ular.</li>
                        <li>Jangan memotong area gigitan.</li>
                        <li>Jangan memberikan obat-obatan tanpa resep dokter.</li>   
                </ul>
            </div>
        </div>
        
    </div>

    <section class="information-section " id="">
        <div class="information_title">
            <b>Alamat Klinik atau Rumah Sakit</b>
        </div>

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
