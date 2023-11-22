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
        h2 {
            ;
        }
    </style>
    <link rel="stylesheet" href="lukaberatStyle.css">
    <title>Login</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <img class="logo" src="/img/logoasset.png" alt="">
    </nav>
    <div class="container-fluid container-lg overflow-hidden" style="margin-bottom: 13rem;">
        <div class="container-fluid container-lg overflow-hidden" style="margin-bottom: 13rem;">
            <div class="row align-items-center ">
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
                            Dalam informasi ini kita dapat mengeksplorasi berbagai aspek penyakit menular, termasuk cara penularannya, faktor risiko, dan upaya-upaya pencegahan yang dapat kita lakukan. Peduli terhadap kesehatan kita dan komunitas kita adalah langkah awal menuju kehidupan yang lebih aman dan sehat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <section class="detail-container">
        <div class="card-container">
          <div class="card" style="margin-top: 10px; margin-bottom: 20px;">
            <div class="card-body">
              <img class="logosection" src="/img/logosection.png" style="width:50px;">
              Luka ringan sering kali diabaikan, tetapi sebenarnya bisa menjadi sumber 
              masalah serius jika tidak diobati dengan benar
            </div>
          </div>
      
          <div class="card" style="margin-top: 10px; margin-bottom: 20px;">
            <div class="card-body">
              <img class="logosection" src="/img/logosection1.png" style="width:50px;">
              Menurut CDC, luka ringan yang diabaikan dapat meningkatkan risiko infeksi 
              dan komplikasi, terutama pada usia 20-30 tahun.
            </div>
          </div>
      
          <div class="card" style="margin-top: 10px; margin-bottom: 20px;">
            <div class="card-body">
              <img class="logosection" src="/img/logosection2.png" style="width:50px;">
              Umumnya, luka ringan tidak memerlukan penanganan serius 
              sehingga dapat di tolong dengan pertolongan pertama saja
            </div>
          </div>
        </div>
      </section>
    <!-- <div class="card-container">
        <div class="card">
            <img class="logosection" src="/img/logosection.png" style="width:50px;">
            Luka ringan sering kali diabaikan, tetapi sebenarnya bisa menjadi sumber
            masalah serius jika tidak diobati dengan benar
        </div>

        <div class="card">
        <img class="logosection" src="/img/logosection1.png" style="width:50px;">
            Menurut CDC, luka ringan yang diabaikan dapat meningkatkan risiko infeksi
            dan komplikasi, terutama pada usia 20-30 tahun.
        </div>

        <div class="card">
        <img class="logosection" src="/img/logosection2.png" style="width:50px;">
        Umumnya, luka ringan tidak memerlukan penanganan serius
        sehingga dapat di tolong dengan pertolongan pertama saja
        </div>
    </div> -->
     
    {{-- <div  class="container-fluid rounded-top-5>
      <div id="News" class="d-flex flex-column flex-lg-row   justify-content-lg-evenly js-scroll fade-in " style="width: 100%">
        
          <div id="item" class="card rounded-4 "
              style="border: none; background-color: #D9D9D9;margin-top: -1rem;">
              <div class="card-body">
                  <img class="cardimg" src="{{ asset('img/logosection.png') }}" alt="">
                  <p class="card-text pb-4 ">Luka ringan sering kali diabaikan, tetapi sebenarnya bisa menjadi sumber
                    masalah serius jika tidak diobati dengan benar</p>
              </div>
          </div>

          <div id="item" class="card rounded-4 my-5 my-lg-0 "
              style="border: none; background-color: #D9D9D9;">
              <div class="card-body">
                  <img class="cardimg " src="{{ asset('img/logosection1.png') }}" alt="">
                  <p class="card-text pb-4 pb-lg-0"> Menurut CDC, luka ringan yang diabaikan dapat meningkatkan risiko infeksi
                    dan komplikasi, terutama pada usia 20-30 tahun.</p>
              </div>
          </div>

          <div id="item" class="card rounded-4 "
              style="border: none; background-color: #D9D9D9;">
              <div class="card-body">
                  <img class="cardimg" src="{{ asset('img/logosection2.png') }}" alt="">
                  <p class="card-text pb-4 pb-lg-0"> Umumnya, luka ringan tidak memerlukan penanganan serius
                    sehingga dapat di tolong dengan pertolongan pertama saja
                  </p>
              </div>
          </div>
      </div>
  </div> --}}

    <section class="info-section">
        <!-- Isi untuk bagian Info -->
        <img src="/img/cidera1.png" class="cidera" style="float:right">
        <div class="info_desc">
            <b>Macam - Macam Luka Ringan:</b>
            <ul class="cidera-list">
                <li>Luka Lecet</li>
                <li>Luka Sayat</li>
                <li>Luka Robek</li>
                <li>Luka Bakar</li>
                <li>Luka Tusuk</li>
                <li>Luka Bedah</li>
            </ul>
        </div>

        <img src="/img/cidera2.png" class="cidera1" style="float:left">
        <div class="infodesc1">
            <b>Tahapan Pertolongan Pertama Apabila Mengalami Luka Ringan:</b>
            <ul class="cideralist1">
                <li>Luka Lecet</li>
                <li>Luka Sayat</li>
                <li>Luka Robek</li>
                <li>Luka Bakar</li>
                <li>Luka Tusuk</li>
                <li>Luka Bedah</li>
            </ul>
        </div>
    </section>


    <section class="obat-section" id="">
        <img class="obat" src="/img/obat.png" style="float:left">
        <div class="obatdesc">
        <b>Obat untuk Mengatasi Luka Ringan</b>
            <ul class="obatlist">
                <li>Povidone Iodine (Betadine)</li>
                <li>Cedexomer Iodine (Iodosrb)</li>
                <li>Bacitracin</li>
                <li>Neosporin</li>
                <li>Silver Sulfadiazine</li>
            </ul>
        </div>
    </section>

    <section class="information-section" id="">
        <div class="information_title">
            <b>Alamat Klinik atau Rumah Sakit</b>
        </div>
        
        <div class="card-container">
            <div class="card">
                <b>RS Medika Permata Hijau</b>
                <img src="/img/hospital_Photo.png" alt="RS Sentosa" >
                <div class="Hospital_detail">
                    <div><b>Alamat:</b>  Jl. Raya Kby. Lama No.64, RT.1/RW.8, Sukabumi Sel., Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11560</div>
                    <div><b>Jam Buka:</b> Buka 24 jam</div>
                    <div><b>Provinsi:</b>  Jakarta</div>
                    <div><b>Telepon:</b> 0819-0550-6159</div>
                </div>
            </div>
    
            <div class="card">
                <b>RS Sehat Bahagia</b>
                <img src="/img/hospital_Photo.png" alt="RS Sentosa" >
                <div class="Hospital_detail">
                    <div><b>Alamat:</b> Jl. Raya Kby. Lama No.64, RT.1/RW.8, Sukabumi Sel., Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11560</div>
                    <div><b>Jam Buka:</b> Buka 24 jam</div>
                    <div><b>Provinsi:</b>  Jakarta</div>
                    <div><b>Telepon:</b> 0819-0550-6159</div>
                </div>
                
            </div>
    
            <div class="card">
                <b>RS Sentosa</b>
                <img src="/img/hospital_Photo.png" alt="RS Sentosa">
                <div class="Hospital_detail">
                    <div><b>Alamat:</b> Jl. Raya Kby. Lama No.64, RT.1/RW.8, Sukabumi Sel., Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11560</div>
                    <div><b>Jam Buka:</b> Buka 24 jam</div>
                    <div><b>Provinsi:</b>  Jakarta</div>
                    <div><b>Telepon:</b> 0819-0550-6159</div>
                </div>
            
            </div>
        </div>
    </section>

    <section class="caution-section">
        <div class="caution">Peringatan jika Anda sedang mengalami penyakit yang mengganggu kesehatan, layanan ini tidak direkomendasikan untuk Anda. Silahkan menghubungi 119</div>
    </section> --}}
</body>

</html>
