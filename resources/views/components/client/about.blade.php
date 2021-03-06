<section id="about" class="about mt-3 mb-5">
    <div class="container">
   
        <div class="row">
            <div class="col-md-6">
                <img src="@if($t == NULL) @else {{asset('gambar_tentang/'. $t->gambar)}} @endif" style="border-radius: 20px" class="shadow-lg img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                
                <p style="text-transform: capitalize">
                {!! Str::limit($t->tentang ?? "Tentang Kami",500) !!}
                    <br>
                    <a href="{{route('tentang_kami')}}" class="btn btn-outline-info shadow-sm mt-3 btn-block" style="border-radius: 40em; size:auto;">Baca Selengkapnya<i class="bi bi-arrow-right"></i></a>               
                </p>

            </div>
        </div>

    </div>
</section><!-- End About Section -->
