
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
                            <li><a href="{{url('admindas')}}"> Dashboard</a></li>
                            <li><a href="{{url('tambah')}}" class="active">Tambah Data Mobil</a></li>
                              <li><a href="{{url('admindata')}}">Data Mobil</a></li>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/lg2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Tambah <em>Data Mobil</em></h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Features Item Start ***** -->
  
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
        <div class="container-fluid">
            <div class="row">
              

                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="contact-form section-bg" style=")">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            
                        <form id="contact" action="{{url('tambah')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="nama" type="text" id="nama" placeholder="Nama Mobil" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="tahun" type="number" id="tahun" pattern="" placeholder="Tahun" placeholder="YYYY" min="2000" max="2100">
                              </fieldset>
                            </div>
                              <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="mesin" type="text" id="mesin" placeholder="mesin" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                 <select name="jenis"  id="jenis">
                                      <option value="City Car">City Car</option>
                                      <option value="Hatchback">Hatchback</option>
                                      <option value="MPV">MPV</option>
                                      <option value="SUV">SUV</option>
                                      <option value="Sedan">Sedan</option>
                                      <option value="Sport">Sport</option>
                                 </select>
                            </div>
                           <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="dimensi" type="text" id="dimensi" placeholder="Dimensi" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="type" type="text" id="type"  placeholder="Type" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input  type="file" name="file" id="file" class="form-control" placeholder="gambar" required="">
                              </fieldset>
                            </div>
                                <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input  type="number" name="harga" id="harga" class="form-control" placeholder="harga" required="">
                              </fieldset>
                            </div>
                          
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Simpan Data Mobil</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->

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
<script>
  document.querySelector("input[type=number]")
  .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
</script>
  </body>
</html>


