<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <div class="main-content">
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Berita</h4>
                            </div>
                            <form action="{{route('update', $data->id)}}" method="post">
                                @csrf
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Judul Berita</label>
                                    <input type="text" class="form-control" name="judul"
                                        placeholder="Masukkan Judul Berita" value="{{$data->judul}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tag</label>
                                    <select class="form-control" name="tag">


                                        @foreach($tag as $t)
                                        <option @if($data->tag == $t->tag) selected @endif>{{$t->tag}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Isi Berita</label>
                                    <textarea class="form-control" id="konten" name="isi" rows="3">{{$data->isi}}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Update Berita">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
