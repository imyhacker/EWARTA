<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('home')}}">EWARTA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('home')}}">ETA</a>
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
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#" class="btn btn-primary" data-toggle="modal" data-target="#upload_akun">Setting Akun</a></li>
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
            <textarea class="form-control" name="tentang" rows="3" id="konten2"></textarea>
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
<div class="modal fade" id="upload_akun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('upload_akun')}}" method="POST">
          @csrf
      <div class="modal-body">
       <div class="form-group">
         <label>Nama Akun</label>
         <input type="text" name="name" class="form-control" placeholder="Nama Akun">
       </div>
       <div class="form-group">
         <label>Email Akun</label>
         <input type="email" name="email" class="form-control" placeholder="Email Valid Akun">
       </div>
       <div class="form-group">
         <label>Password Akun</label>
         <input type="password" name="password" class="form-control" placeholder="Password Akun Min 8">
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
