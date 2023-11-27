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

<<<<<<< HEAD
<<<<<<< Updated upstream
    <link rel="stylesheet" href="lukaberatStyle.css">
=======
    <link rel="stylesheet" href="Page_Style.css">
>>>>>>> bffd9a50f4e1c37a88612efa335766a1f69a9554
    <title>Login</title>
=======
    <link rel="stylesheet" href="Page_Style.css">
    <title>Penyakit Menular</title>
>>>>>>> Stashed changes

</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <img class="logo" src="/img/logoasset.png" alt="">
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
                                
                                <span class="black">Seputar</span><br>
                                <span class="red">Penyakit Menular</span><br>
                                <span class="black">Untuk Hidup Sehat</span>
                            </h1>
                        </section>

                        <p class="text-center text-lg-start fs-5">
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
                    style="margin-top: 30px; margin-bottom: 10px; background-color: #D9D9D9 ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection.png" style="width:50px;">
                        Penyakit menular adalah ancaman serius bagi kesehatan global, dan merupakan penyebab  kematian di seluruh 
                        dunia.
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #D9D9D9 ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection1.png" style="width:50px;">
                        Menurut World Health Organization (WHO), usia 20-30 tahun merupakan rentang usia yang rentan terhadap banyak penyakit menular.
                    </div>
                </div>

                <div class="card p-4 rounded-4"
                    style="margin-top: 30px; margin-bottom: 10px;background-color: #D9D9D9 ;border: none;">
                    <div class="card-body">
                        <img class="logosection" src="/img/logosection2.png" style="width:50px;">
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
                    <b>Macam - macam Penyakit Menular:</b>
                    <ul class="cideralist1">
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
                    <img src="/img/Penyakit menular/asset2.png" class="cidera1 m-0 h-75 w-75  " style="float:left">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <b>Penyakit Menular Sendiri adalah Infeksi yang Disebabkan oleh Mikro Organisme:</b>
                    <ul class="cideralist1">
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
            <div class="col d-flex align-items-center justify-content-center">
                <img src="/img/Penyakit menular/asset3.png" class="cidera1 m-0 h-75 w-75">
            </div>
            <div class="col d-flex flex-column  justify-content-center">
                <b>Cara Mengatasi Penyakit Menular:</b>
                <ul class="cideralist1  text-left">
                        <li>Mengurangi kontak dengan orang yang sakit.</li>
                        <li>Mengurangi kontak dengan binatang pembawa penyakit.</li>
                        <li>Mengenakan masker.</li>
                        <li>Tidak mengunjungi tempat yang sedang terdapat wabah.</li>   
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
