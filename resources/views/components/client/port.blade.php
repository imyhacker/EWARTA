<section id="berita" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Berita Terbaru</h2>
          <p>Beberapa Berita Terbaru</p>
        </div>

    
        <div class="row portfolio-container">
        @foreach($berita as $b)
           <a href="{{route('selengkapnya', $b->slug)}}">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
              <img src="{{asset('gambar/'.$b->foto)}}" style="object-fit: cover;
"  alt="">

              </figure>

              <div class="portfolio-info">
                <h4><a href="{{route('selengkapnya', $b->slug)}}" style="text-transform: Capitalize">{{Str::limit($b->judul, 20)}}            </a></h4>
                <p>{{$b->created_at->diffForHumans()}}</p>

              </div>
            </div>
          </div>
          </a>
        @endforeach
        </div>
        
      </div>
    </section><!-- End Portfolio Section -->
