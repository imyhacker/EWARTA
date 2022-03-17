<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <div class="main-content">
        
            <div class="row">
                <div class="col-md-12">
                    <section class="section">


                        <!-- MAIN OF CENTER CONTENT -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Edit Informasi</h4>
                                    </div>
                                    <form action="{{route('update_info', $data->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="card-body table-responsive">
                                        <div class="form-group">
                                            <label>Foto Informasi</label>
                                            <input type="file" class="form-control-file" name="foto">
                                        </div>
                                        <div class="form-group">
                                            <label>Judul Informasi</label>
                                            <input type="text" class="form-control" name="judul"
                                                placeholder="Masukan Judul Informasi" value="{{$data->judul}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Informasi</label>
                                            <textarea name="isi" id="konten" cols="30" rows="10">{{$data->isi}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-outline-success btn-block" value="Update Data" id="">
                                        </div>
                                        </form>

                                    </div>
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

    <x-dcore.footer />
</div>
</div>
<x-dcore.script />
