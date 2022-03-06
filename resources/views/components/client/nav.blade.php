  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">{{$depan1->nama_aplikasi ?? config('app.name')}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link" href="{{url('/')}}">Beranda</a></li>
          <li><a class="nav-link" href="{{route('tentang_kami')}}">Tentang Kami</a></li>
          <li><a class="nav-link" href="#portfolio">Informasi</a></li>
          <li><a class="nav-link" href="#berita">Berita</a></li>
          <li><a class="nav-link" href="https://wa.me/{{$depan1->telepon ?? ''}}?text=Halo%20Admin%20Saya%20Ingin%20Mengajukan%20Berita%20Hari%20Ini%20Yang%20Sedang%20Terjadi%20Di%20Desa%20Tegalurung">Kontak</a></li>
          <li><a class="nav-link" href="#testimonials">Login</a></li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

     

    </div>
  </header><!-- End Header -->
