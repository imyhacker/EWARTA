<section id="what-we-do" class="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               
                {!! $berita->isi !!}
                
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <a href="http://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank" class="btn btn-outline-info btn-block w-100"><i class="fas fa-share-alt"></i> Share Facebook</a>
                        </div>
                        <div class="col-md-4 mt-3">
                        <a href="mailto:?Subject=Ada Yang Baru Nih&Body=I%20saw%20this%20and%20thought%20of%20you!%20 {{url()->current()}}" class="btn btn-outline-danger btn-block w-100"><i class="fas fa-facebook"></i> Share Email</a>
                        </div>
                        <div class="col-md-4 mt-3">
                        <a href="whatsapp://send?text=Ada Yang Baru Nih, Yuk Lihat Di Link Berikut {{url()->current()}}" class="btn btn-outline-success btn-block w-100"><i class="fas fa-facebook"></i> Share Whatsapp</a>

                        </div>
                    </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Tag</h3>
                        <ul class="list-group list-group-flush">
                            @foreach($tag as $t)
                            <li class="list-group-item" style="text-transform: capitalize;"><a href="" style="text-decoration: none;">{{$t->tag}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h3>Berita Acak</h3>
                        <ul class="list-group list-group-flush">
                            @foreach($acak as $bb)
                            <li class="list-group-item" style="text-transform: capitalize;">
                            <a href="{{route('selengkapnya', $bb->slug)}}" style="text-decoration: none;">
                            {{$bb->judul}}
                            </a>
                            </li>
                           
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h3>Berita Terbaru</h3>
                        <ul class="list-group list-group-flush">
                            @foreach($terbaru as $trb)
                            <li class="list-group-item" style="text-transform: capitalize;">
                            <a href="{{route('selengkapnya', $trb->slug)}}" style="text-decoration: none;">
                            {{$trb->judul}}
                            </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End What We Do Section -->
