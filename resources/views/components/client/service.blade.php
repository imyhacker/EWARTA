<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Informasi Terbaru</h2>
            <p>Beberapa Informasi Terbaru</p>
        </div>


        <div class="row portfolio-container">
            @foreach($info as $in)
            <a href="{{route('selengkapnya_info', $in->slug_info)}}">
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('gambar_info/'.$in->foto)}}" style="object-fit: cover;" class="img-fluid"
                                alt="">

                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="{{route('selengkapnya', $in->slug_info)}}"
                                    style="text-transform: Capitalize">{{Str::limit($in->judul, 20)}} </a></h4>
                            <p>{{$in->created_at->diffForHumans()}} - <i class="bi bi-eye"></i> {{$in->dilihat ?? '0'}} </p>

                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        
    </div>
</section><!-- End Portfolio Section -->
