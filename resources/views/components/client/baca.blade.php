<section id="what-we-do" class="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               
                {!! $berita->isi !!}
                <div id="disqus_thread"></div>

            </div>
            <div class="col-md-4">
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
                        <h3>Berita Populer</h3>
                        <ul class="list-group list-group-flush">
                        @foreach($high as $h)
                            <li class="list-group-item"><a href="{{route('selengkapnya', $h->slug)}}">{{$h->judul}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h3>Berita Terbaru</h3>
                        <ul class="list-group list-group-flush">
                            @foreach($bb as $bbc)
                            <li class="list-group-item"><a href="{{route('selengkapnya', $bbc->slug)}}">{{$bbc->judul}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h3>Berita Acak</h3>
                        <ul class="list-group list-group-flush">
                        @foreach($bac as $babc)
                            <li class="list-group-item"><a href="{{route('selengkapnya', $babc->slug)}}">{{$babc->judul}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End What We Do Section -->
