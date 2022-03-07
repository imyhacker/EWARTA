<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 col-md-6 footer-contact">
        <h3>{{$depan1->nama_aplikasi ?? config('app.name')}}</h3>
        <p>
        {{$depan1->alamat ?? 'Belum Ada Alamat'}} 
        <br><br>
          <strong>Phone:</strong> {{$depan1->telepon ?? 'Belum Ada Telepon'}}<br>
          <strong>Email:</strong> {{$depan1->email ?? 'Belum Ada Email'}}<br>
        </p>
      </div>

      <div class="col-lg-6 col-md-6 footer-links">
        <h4>Link Alternatif</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Beranda</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('tentang_kami')}}">Tentang Kami</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('informasi')}}">Informasi</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('semua_berita')}}">Berita</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{url('/login')}}">Login</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>{{$depan1->nama_aplikasi ?? config('app.name')}}</span></strong>. All Rights Reserved
    </div>

  </div>
 
</div>
</footer><!-- End Footer -->
