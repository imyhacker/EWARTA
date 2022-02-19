<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1 style="text-transform: Capitalize">{{$berita->judul}}</h1>
      <h2>{{$berita->created_at->diffForHumans()}}</h2>
      <a href="#about" class="btn-get-started scrollto">{{$berita->tag}}</a>
    </div>
  </section><!-- End Hero -->
