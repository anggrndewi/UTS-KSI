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
              <a class="nav-link" href="\Riwayat">Riwayat</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="btn btn-primary ml-lg-3" href="#">Login</a>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>

  </header>

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="/Beranda">Home</a></li>
              <li class="breadcrumb-item"><a href="/Artikel">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$blog->Nama_berita}}</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="{{asset('storage/'.$blog->Gambar)}}" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By</span> <a href="#">{{$blog->Nama_upload}}</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#">{{$blog->Waktu}}</a>
              </div>
              <span class="divider">|</span>
              <div>
                <a href="#">{{$blog->Tipe}}</a>  
              </div>
              <span class="divider">|</span>
            </div>
            <h2 class="post-title h1">{{$blog->Nama_berita}}</h2>
            <div class="post-content">
              <p>{!!$blog->Isi_berita!!}</p> <!-- covert a string to html in php Laravel {!!$blog->Isi_berita!!} -->
            </div>
            <div class="post-tags">
              <a href="#" class="tag-link">{{$blog->Tipe}}</a>
            </div>
          </article> <!-- .blog-details -->

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>
        </div>
       
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

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
  
</body>
</html>