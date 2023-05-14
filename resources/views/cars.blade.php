
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
                            <li><a href="{{url('/')}}" > Dashboard</a></li>
                            <li><a href="cars.html" class="active">Mobil</a></li>
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
  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/lg3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Data Mobil<em> Honda</em></h2>
                        <p>Daftar Mobil</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>


            <div class="row">
              
                @foreach ($data as $item)
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                                                @if( in_array(pathinfo($item->gambar, PATHINFO_EXTENSION), ['png', 'jpg', 'jpeg']))
                                    <img src="{{asset('uploads')}}/{{$item->gambar}}" style="height: 1%">
                                @else
                                    <img src="https://www.freeiconspng.com/uploads/file-txt-icon--icon-search-engine--iconfinder-14.png"
                                    style="height: 1%">
                                @endif
                        </div>
                        <div class="down-content">
                            <span>
                               &nbsp; <sup>Rp</sup>{{$item->harga}} &nbsp; ({{$item->tahun}})
                            </span>
                            <h4>{{$item->nama}}</h4>
                            <p>
                                <i class="fa fa-dashboard"></i> {{$item->mesin}}&nbsp;&nbsp;&nbsp;
                                 <i class="fa fa-cube"></i> {{$item->type}} &nbsp;&nbsp;&nbsp;
                                 <i class="fa fa-cog"></i> {{$item->jenis}} &nbsp;&nbsp;&nbsp; </p>
                        </div>
                    </div>
                </div>
  @endforeach
            </div>

            <br>
                
          

        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->

    <!-- ***** Cars Ends ***** -->

 

    <!-- ***** Blog Start ***** -->
    
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