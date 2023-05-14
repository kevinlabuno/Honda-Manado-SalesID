
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Honda | Manado</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo"><em>HONDA</em> MANADO</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('/')}}" class="active"> Dashboard</a></li>
                            <li><a href="{{url('cars')}}">Mobil</a></li>
                             {{-- @if(Auth::user()->type=='admin')<li><a href="cars.html">Tambah Data</a></li>@endif --}}
                            
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tentang</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="https://www.honda-indonesia.com/">Honda Indonesia</a>
                                    <a class="dropdown-item" href="https://www.honda-indonesia.com/aftersales/customer-care/contact">Honda Customer Care</a>
                                                                  <a class="dropdown-item" href="https://www.honda-indonesia.com/aftersales/parts/warranty">Honda Genuine Parts</a>
                                </div>
                            </li>
                            <li><a href="https://www.hondamanado.com/contactus">Kontak</a></li>
                            <li><a href="{{url('login')}}">Login</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Mari bergabung bersama kami</h6>
                <h2>The <em>Power</em> of dreams!</h2>
                {{-- <div class="main-button">
                    <a href="contact.html">Hubungi Kami</a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Mobil <em>Pilihan</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nikmati pengalaman berkendara penuh gaya dan kenyamanan dengan mobil yang sporty, stylish, dan sophisticated. It’s time to show the world who you really are!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/hrv.png" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>Rp</sup>420.000.000 </del> &nbsp; <sup>Rp</sup>383.900.000
                            </span>

                            <h4>All New HONDA HR-V S</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 1.5L DOHC i-VTEC Engine &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 121 PS, Torque 145Nm &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>

                            {{-- <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/accord.png" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>Rp</sup>830.000.000 </del> &nbsp; <sup>Rp</sup>795.300.000 
                            </span>

                            <h4>Honda Accord 1.5L Turbo</h4>

                            <p>
                                <i class="fa fa-dashboard"></i>1.5L DOHC VTEC Turbo &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 190PS &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Matic &nbsp;&nbsp;&nbsp;
                            </p>

                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/cityhactback.png" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>Rp</sup>391.600.000 </del> &nbsp; <sup>Rp</sup>351.600.000
                            </span>

                            <h4>Honda City RS Hatchback</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 1.5L DOHC i-VTEC &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 121PS &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Matic &nbsp;&nbsp;&nbsp;
                            </p>

                            {{-- <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="{{url('cars')}}">Lihat Mobil</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/honda1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Program <em>Semangat Baru Honda Baru</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Untuk setiap pembelian mobil honda di bulan Mei - Juni 2023, Kamu akan mendapatkan beragam keuntungan mulai dari bebas biaya perawatan dan berbagai penawaran menarik!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>1. Bebas Biaya Perawatan (free Paket Hemat 1) <br>Dapatkan keuntungan bebas biaya perawatan! Khusus untuk pembelian Honda Brio Satya, Honda Brio RS, Honda CR-V, Honda Mobilio, Honda City Hatchback RS dan All New Honda BR-V, kamu akan langsung mendapatkan Paket Hemat 1 yakni gratis biaya jasa dan suku cadang untuk perawatan berkala sampai dengan 50.000 KM atau 4 tahun.</p>

                        <p>2. Sporty DNA Package Program <br>Khusus untuk pembelian All New Honda City Hatchback RS dengan transmisi manual, dapatkan kesempatan reward tambahan Rp 10 juta dan bonus Genuine Part Accessories dari Honda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Baca Blog <em>Kami</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                       
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><em>Layanan Aftersales.</em></a></li>
                  <li><a href='#tabs-2'><em>Honda News</em>, New Honda Brio.</a></li>
                  <li><a href='#tabs-3'><em>Honda News</em>,Honda e:Technology</a></li>
                  <div class="main-rounded-button"><a href="https://www.honda-indonesia.com/news">Lebih Banyak Berita</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/news1.jpg" alt="">
                    <h4>Cek Biaya Perawatan Berkala, Harga Aksesori dan Lainnya.</h4>

                    <p><i class="fa fa-user"></i> Johnatan Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 03.07.2023 10:10 &nbsp; </p>

                    <p>Paket Hemat Merupakan produk dari layanan purna jual yang sudah mencakup semua biaya jasa dan suku cadang sesuai buku garansi dan perawatan. Terdapat 2 pilihan Paket Hemat, Paket Hemat 1 (4 Tahun / 50.000 Km) dan Paket Hemat 2 (8 Tahun / 100.000 Km).
Paket Hemat Mini merupakan produk dari layanan purna jual untuk mobil Honda dengan Kilometer lebih dari 60.000km yang sudah mencakup semua biaya jasa dan suku cadang sesuai buku garansi dan perawatan selama 1 tahun atau 2x Service.</p>
                    <div class="main-button">
                        <a href="https://api.whatsapp.com/send/?phone=6281110676332&text=Hai+Hani%21+Saya+ingin+bertanya+tentang+produk+dan+layanan+Honda&type=phone_number&app_absent=0">Hubungi Hani</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/news2.jpg" alt="">
                    <h4>Honda Luncurkan New Honda Brio, Model Terpopuler Di Indonesia Kini Tampil Lebih Stylish Dengan Fitur Lebih Lengkap</h4>
                    <p><i class="fa fa-user"></i> Johnatan Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 05.05.2023 10:10 &nbsp;|&nbsp; </p>
                    <p>PT Honda Prospect Motor meluncurkan model terbaru dari Honda Brio di Jakarta pada tanggal 5 Mei 2023. Dengan mempertahankan performa mesin terbesar di kelasnya, karakter Fun to Drive serta harga yang value for money, model terpopuler di Indonesia ini sekarang tampil dengan desain yang lebih sporty dan stylish serta fitur yang semakin lengkap.</p>
                    <div class="main-button">
                        <a href="https://www.honda-indonesia.com/news/honda-luncurkan-new-honda-brio-model-terpopuler-di-indonesia-kini-tampil-lebih-stylish-dengan-fitur-lebih-lengkap/MzA5NA==">Lanjut Membaca</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/news3.jpg" alt="">
                    <h4>Honda e:Technology, Solusi Lengkap dari Honda Untuk Wujudkan Visi Elektrifikasi di Indonesia.</h4>
                    <p><i class="fa fa-user"></i> Johnatan Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 10.04.2023 10:10 &nbsp;|&nbsp;</p>
                    <p>Honda menghadirkan pengalaman teknologi elektrifikasi dalam acara Honda e:Technology Media Experience yang dilaksanakan pada tanggal 10 April 2023 di Karawang, Jawa Barat. Dalam acara ini, Honda menampilkan beragam teknologi untuk mewujudkan visi elektrifikasi di Indonesia yang memenuhi beragam kebutuhan konsumen, mulai dari mobil, sepeda motor, hingga Power Product.</p>
                    <div class="main-button">
                        <a href="https://www.honda-indonesia.com/news/honda-etechnology-solusi-lengkap-dari-honda-untuk-wujudkan-visi-elektrifikasi-di-indonesia/MzA4Nw==">Lanjut Membaca</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->


    <!-- ***** Testimonials Item Start ***** -->
 
    <!-- ***** Testimonials Item End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2023 Honda Manado
                       <a href="https://www.phpjabbers.com/"></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>