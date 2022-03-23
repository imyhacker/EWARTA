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
                                <h4>berita</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                            data-target="#tambahberita">
                                            Tambah Berita
                                        </button>

                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-block" data-toggle="modal"
                                            data-target="#tambahtag">
                                            Tambah Tag
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
            <div class="row">
                <div class="col-md-8">
                    <section class="section">


                        <!-- MAIN OF CENTER CONTENT -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>berita</h4>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table" id="table_berita">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Tag</th>
                                                    <th>Opt</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($berita as $b)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$b->judul}}</td>
                                                    <td>{{$b->tag}}</td>
                                                    <td>
                                                        <a href="{{route('edit', $b->id)}}"
                                                            class="btn btn-outline-info"><i class="fas fa-edit"></i></a>

                                                        <a href="{{route('hapus_berita', $b->id)}}"
                                                            class="btn btn-outline-danger"><i
                                                                class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- END OF CENTER CONTENT -->


                    </section>
                </div>
                <div class="col-md-4">
                    <section class="section">


                        <!-- MAIN OF CENTER CONTENT -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Tag</h4>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table" id="table_tag">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tag</th>
                                                    <th>Opt</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($tag as $t)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$t->tag}}</td>
                                                    <td>
                                                        <a href="{{route('hapus_tag', $t->id)}}"
                                                            class="btn btn-outline-danger btn-sm"><i
                                                                class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- END OF CENTER CONTENT -->


                    </section>
                </div>
            </div>


        </div>
        <!-- Modal -->
        <div class="modal fade" id="tambahberita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    @error('gambar')
                                <div class="alert alert-danger mt-2 mb-2" role="alert">
                                    {{$message}}
                                </div>
                     @enderror
                     @error('judul')
                                <div class="alert alert-danger mt-2 mb-2" role="alert">
                                    {{$message}}
                                </div>
                     @enderror
                     @error('tag')
                                <div class="alert alert-danger mt-2 mb-2" role="alert">
                                    {{$message}}
                                </div>
                     @enderror
                     @error('isi')
                                <div class="alert alert-danger mt-2 mb-2" role="alert">
                                    {{$message}}
                                </div>
                     @enderror
                        <form action="{{route('upload_berita')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control-file @error('gambar') is-invalid @enderror"
                                    name="gambar">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Judul Berita</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                    placeholder="Masukkan Judul Berita" value="{{old('judul')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Tag</label>
                                <select class="form-control @error('tag') is-invalid @enderror" name="tag">

                                    <option disabled selected value>== PILIH TAG ==</option>
                                    @foreach($tag as $t)
                                    <option>{{$t->tag}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Isi Berita</label>
                                <textarea class="form-control @error('isi') is-invalid @enderror" id="konten" name="isi" rows="3">{{old('isi')}}</textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tambahtag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Tag</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_tag')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="tag" placeholder="Masukan Tag">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
