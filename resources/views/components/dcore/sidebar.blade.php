<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-upload"></i><span>Data Upload</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('berita')}}">Data Berita</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('info')}}">Data Informasi</a></li>
                </ul>
                
            </li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Pengaturan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('pengaturan')}}">Setting Aplikasi</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Setting Tentang Kami</a></li>
                </ul>
            </li>
    </aside>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data Tentang Kami</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('upload_tentang')}}" method="POST" enctype="multipart/form-data">
          @csrf
      <div class="modal-body">
        <div class="form-group">
            <label>Foto Tentang Kami</label>
            <input type="file" class="form-control-file" name="gambar">
        </div>
        <div class="form-group">
            <label>Tentang Kami</label>
            <textarea class="form-control" name="tentang" rows="3" id="konten"></textarea>
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
