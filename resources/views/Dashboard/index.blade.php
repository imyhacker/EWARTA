<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <div class="main-content">
            <section class="section">
                <x-dcore.card :app="$app" :tentang="$tentang" :tb="$tb" :ti="$ti"/>

                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Mini Navigasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                      <a href="" class="btn btn-outline-success btn-block">Berita <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                    <a href="" class="btn btn-outline-info btn-block">Informasi <i class="fas fa-arrow-right"></i></a>

                                    </div>
                                    <div class="col-md-4 mt-3">
                                    <a href="" class="btn btn-outline-warning btn-block">Kontak <i class="fas fa-arrow-right"></i></a>

                                    </div>
                                    <div class="col-md-12 mt-3">
                                    <a href="" class="btn btn-outline-danger btn-block">Setting Aplikasi <i class="fas fa-arrow-right"></i></a>

                                    </div>
                                </div>
                            </div>
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
