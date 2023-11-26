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
                    <img style="width: 90%; min-width: 40%;" src="{{ asset('img/cidera/assetutama.png') }}" alt="">
                </div>
                <div class="col-lg-5  order-lg-0 order-1 mt-lg-0 mt-3 text-center text-lg-start">
                    <!-- Tambahkan kelas col-lg-5 di sini -->
                    <div class="animationTeks1 " id="">
                        <section class="about-section" id="">
                            <h1>
                                <span class="black">Mengenal Apa itu</span><br>
                                <span class="red">Cidera</span><br>
                                <span class="black">dan Penanganannya</span>
                            </h1>
                        </section>

                        <p class="text-center text-lg-start fs-5">
                        Masih banyak masyarakat awam memahami jika terjadi suatu cidera yang terbesit dalam benak mereka adalah langsung mendatangi tukang urut. Namun apakah cara tersebut efektif dalam mengurangi atau menghilangkan efek dari kondisi cidera tersebut?

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
                        Cidera adalah kelainan yang terjadi pada tubuh yang mengakibatkan timbulnya nyeri akibat aktifitas gerak yang berlebihan atau kecelakaan.                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #D9D9D9 ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection1.png" style="width:50px;">
                        Pada dasarnya cidera dapat terjadi disebabkan oleh faktor-faktor dari dalam (intrinsik) maupun dari luar (ekstrinsik) yang kurang dijaga dan diperhatikan                     </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #D9D9D9 ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection2.png" style="width:50px;">
                        Setelah dilakukan penanganan awal, segera ke dokter untuk dapat dievaluasi lebih lanjut tentang tingkat keparahan cidera yang dialami                    </div>
                </div>
            </div>
        </div>

        <div class="container rounded-top-5" style="">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-flex justify-content-center align-items-center m-0 ">
                    <img src="/img/cidera/asset1.png" class="cidera1 m-0 h-75 w-75  " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <b>Macam - macam Cidera:</b>
                    <ul class="cideralist1">
                        <li>Sprain (terkilir / keseleo)</li>
                        <li>Patah tulang</li>
                        <li>Dislokasi dan subluksasi</li>
                        <li>Strain</li>
                        <li>Cidera Bahu</li>
                        <li>Cidera siku</li>
                        <li>Cidera pinggang</li>
                        <li>Cidera paha</li>

                        
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col d-flex justify-content-center  align-items-center m-0">
                    <img src="/img/cidera/asset2.png" class="cidera1 m-0 h-75 w-75  " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <b>Tanda – Tanda Tubuh Saat Mengalami Cidera:</b>
                    <ul class="cideralist1">
                        <li>Terjadinya pembengkakan.</li>
                        <li>Terjadinya pendarahan (bisa terjadi didalam atau luar jaringan).</li>
                        <li>Peningkatan rasa nyeri pada jaringan yang mengalami trauma.</li>
                        <li>Peningkatan suhu sekitar jaringan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container rounded-top-5 " style="">
        <div class="row row-cols-1 row-cols-md-2 g-4 flex-row-reverse">
            <div class="col d-flex align-items-center justify-content-center">
                <img src="/img/cidera/asset3.png" class="cidera1 m-0 h-75 w-75">
            </div>
            <div class="col d-flex flex-column  justify-content-center">
                <b>Cara Menangani Cidera:</b>
                <ul class="cideralist1  text-left">
                        <li>Lindungi area cedera agar tidak meningkatkan resiko cedera berulang dengan cara membebatnya dengan elastic perban atau dekker.</li>
                        <li>Segera istirahatkan bagian tubuh yang mengalami trauma dengan tidak menggerakkanya.</li>
                        <li>Gunakan es batu atau air dingin saat infalasi untuk menghambatnya .</li>

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
