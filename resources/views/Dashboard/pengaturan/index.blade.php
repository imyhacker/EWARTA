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
                                <h4>Pengaturan Aplikasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                            data-target="#tambahinfo">
                                            Edit / Update Aplikasi
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
                                        <h4>Pengaturan Aplikasi</h4>
                                    </div>
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                           Nama Aplikasi : {{$data->nama_aplikasi ?? "-"}}
                                        </div>
                                        <div class="col-md-6">
                                          Slogan Aplikasi : {{$data->yel_yel ?? "-"}}
                                        </div>
                                        <div class="col-md-6">
                                           Email Aplikasi : {{$data->email ?? "-"}}
                                        </div>
                                        <div class="col-md-6">
                                            Telepon Admin : {{$data->telepon ?? "-"}}

                                        </div>
                                        <div class="col-md-6">
                                            Alamat : {{$data->alamat ?? "-"}}
                                        </div>
                                       <div class="col-md-12 mt-4">
                                           <h3>
                                           <a href="{{url('/')}}" style="text-decoration: none;">Klik Disini Untuk Lihat Hasilnya</a>
                                           </h3>
                                       </div>
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
        <div class="modal fade" id="tambahinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Pengaturan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_setting')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <p class="text-danger">*Note : Jika Ingin Update Datanya Di Mohon Diisi Semua Formnya.</p>
                        <div class="form-group">
                                <label>Foto Depan</label>
                                <input type="file" class="form-control-file" name="foto_depan">
                            </div>
                            <div class="form-group">
                                <label>Nama Aplikasi</label>
                                <input type="text" class="form-control" name="nama_aplikasi" placeholder="Masukan Judul Informasi">
                            </div>
                            <div class="form-group">
                                <label>Copyright Aplikasi</label>
                                <input type="text" class="form-control" name="judul_aplikasi" placeholder="Masukan Judul Informasi">
                            </div>
                            <div class="form-group">
                                <label>Yel Yel</label>
                                <input type="text" class="form-control" name="yel_yel" placeholder="Masukan Judul Informasi">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukan Judul Informasi">
                            </div>
                            <div class="form-group">
                                <label>Telpon</label>
                                <input type="number" class="form-control" name="telepon" placeholder="Masukan Judul Informasi">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
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
