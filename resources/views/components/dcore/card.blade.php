<div class="row">

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-bolt"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Berita</h4>
                </div>
                <div class="card-body">
                    {{$tb}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-bolt"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Informasi</h4>
                </div>
                <div class="card-body">
                {{$ti}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-6 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-bolt"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Nama Aplikasi</h4>
                </div>
                <div class="card-body">
                    {{$app->nama_aplikasi ?? "Nama Aplikasi"}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-6 col-sm-12">
        <div class="card card-statistic-2">

            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-book"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Tentang Kami</h4>
                </div>
                <div class="card-body" style="text-overflow: uppercase;">
                    {!! Str::limit($tentang->tentang ?? "Tentang Kami",80) !!}
                </div>
            </div>
        </div>
    </div>
</div>
