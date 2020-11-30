<!-- Header Start -->
<header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('beranda') }}">
            <img src="{{url('ppdi-frontend/images/ppdi.png')}}" width="70" height="70" alt="">
            <span style="font-size: 17px;">PPDI JAWA BARAT</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('beranda') }}">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{ route('profile') }}">PPDI Jawa Barat</a>
                  <a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah PPDI</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('pengurus') }}">Pengurus PPDI</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{ route('foto') }}">Foto</a>
                  <a class="dropdown-item" href="{{ route('video') }}">Video</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Hubungi Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->