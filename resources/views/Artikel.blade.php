<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Medical Center</title>

  <link rel="stylesheet" href="{{ asset('css/maicons.css')}}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{ asset('vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{ asset('css/theme.css')}}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Help</span>-doc</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-left">
            <li class="nav-item">
              <a class="nav-link" href="/Beranda">Beranda</a>
            </li><li class="nav-item active ">
              <a class="nav-link" href="/Artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Riwayat">Riwayat</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="btn btn-primary ml-lg-3" href="/Login">Login</a>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  
<div class="page-section">
  <h1 class="text-center wow fadeInUp">News</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">

          @foreach ($blogs as $blog)
            <div class="col-sm-6 py-3" ng-controller="ListaComprasController">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">{{ $blog->Tipe }} </a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{asset('storage/'.$blog->Gambar)}}" alt="">
                  </a>
                </div>
               
                <div class="body" ng-repeat="filter:search">
                  <h5 class="post-title"><a href="/index/{{ $blog->id}}/blog-details "> {{$blog->Nama_berita}} </a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="{{asset('storage/'.$blog->Gambar)}}" alt="">
                      </div>
                      <span>{{$blog->Nama_Upload}} </span>
                    </div>
                    <span class="mai-time"></span> {{$blog->Waktu}}
                  </div>
                </div>
              </div>
            </div>    
            </tr>
        
            {{ csrf_field() }}
          @endforeach
          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter" ng-model="search">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>
           
            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>
              @foreach ($blogs as $blog)
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="{{asset('storage/'.$blog->Gambar)}}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="/index/{{ $blog->id}}/blog-details">{{$blog->Nama_berita}}</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> {{$blog->Waktu}}</a>
                    <a href="#"><span class="mai-person"></span> {{$blog->Nama_upload}}</a>
                  </div>
                </div>
              </div>
              {{ csrf_field() }}
              @endforeach
            </div>
    
            <div class="sidebar-block">        
              <h3 class="sidebar-title">Tag Cloud</h3>
              @foreach ($blogs as $blog)
              <div class="tagcloud">
                <a href="/index/{{ $blog->id}}/blog-details" class="tag-cloud-link">{{$blog->Tipe}}</a>
              </div>
              {{ csrf_field() }}
              @endforeach
            </div>

          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  </div> <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script>
   function ListaComprasController($scope) {
    
    $scope.item = {};
    $scope.itens = [
        {produto: 'Leite', quantidade: 2, comprado: false},
        {produto: 'Cerveja', quantidade: 12, comprado: false}
        {}
    ];

    }
</script>
  
</body>
</html>