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
                                <h4>Informasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                            data-target="#tambahinfo">
                                            Tambah Informasi
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
                <div class="col-md-12">
                    <section class="section">


                        <!-- MAIN OF CENTER CONTENT -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Informasi</h4>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table" id="table_berita">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Uploader</th>
                                                    <th>Uploaded At</th>
                                                    <th>Opt</th>
                                                </tr>
                                            </thead>
                                            @php $no = 1; @endphp
                                            @foreach($info as $inf)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$inf->judul}}</td>
                                                    <td>{{$inf->uploader}}</td>
                                                    <td>{{$inf->created_at->diffForHumans()}}</td>
                                                    <td>
                                                        <a href="{{route('edit_info',$inf->id)}}" class="btn btn-outline-info"><i class="fas fa-edit"></i></a>
                                                        <a href="{{route('hapus_info', $inf->id)}}" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>

                                                    </td>
                                                </tr>
                                            @endforeach
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
       
        <!-- Modal -->
        <div class="modal fade" id="tambahinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Informasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_info')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                        <div class="form-group">
                                <label>Foto Informasi</label>
                                <input type="file" class="form-control-file" name="foto">
                            </div>
                            <div class="form-group">
                                <label>Judul Informasi</label>
                                <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Informasi">
                            </div>
                            <div class="form-group">
                                <label>Isi Informasi</label>
                                <textarea name="isi" class="form-control" id="konten" cols="30" rows="10"></textarea>
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
