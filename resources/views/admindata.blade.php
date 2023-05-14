
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
                            <li><a href="{{url('admindas')}}" > Dashboard</a></li>
                            <li><a href="{{url('tambah')}}">Tambah Data Mobil</a></li>
                              <li><a href="{{url('admindata')}}" class="active">Data Mobil</a></li>
                             {{-- @if(Auth::user()->type=='admin')<li><a href="cars.html">Tambah Data</a></li>@endif --}}
                            
                        
                               <li><a href="{{url('logout')}}">Logout</a></li>
                               <li><a class="fa fa-user">{{Auth::user()->nama}}</a></li> 
                         
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
  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/lg2.jpg)">
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
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->

<section class="section" id="features">
        <div class="container">
            <br>
            <br>
            <br>
                             @if ($message = Session::get('success'))
                <div class="alert alert-primary" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                   </button>
                  </div>
                    @endif
            <div class="row">
             
                     <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama</th>
                             <th scope="col">Harga</th>
                            <th scope="col">Mesin</th>
                            <th scope="col">type</th>
                            <th scope="col">jenis</th>
                            <th scope="col">tahun</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- menampilkan data  --}}
                     
                        @foreach ($data as $key=>$item)
                        <tr>
                         
                             
                            <td>
                                {{-- jika ekstensi file adalah png, jpg atau jpeg maka tampilkan gambar  --}}
                                @if( in_array(pathinfo($item->gambar, PATHINFO_EXTENSION), ['png', 'jpg', 'jpeg']))
                                    <img src="{{asset('uploads')}}/{{$item->gambar}}" style="height: 1%">
                                @else
                                    <img src="https://www.freeiconspng.com/uploads/file-txt-icon--icon-search-engine--iconfinder-14.png"
                                    style="height: 1%">
                                @endif
                            </td>
                            <td>{{$item->nama}}</td>
                             <td>{{$item->harga}}</td>
                            <td>{{$item->mesin}}</td>
                             <td>{{$item->type}}</td>
                             <td>{{$item->jenis}}</td>
                             <td>{{$item->tahun}}</td>
                             <td><a href="{{url('post/hapus')}}/{{$item->id}}" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </section>
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