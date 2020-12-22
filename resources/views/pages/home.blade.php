@extends('layouts.default')
@section('title', 'Beranda')

@section('content')
    <!-- Slider Start -->
    <div class="top-shadow"></div>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url({{'ppdi-frontend/images/hero_1.jpg'}});">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-7 text-center col-sm-12 element-animate">
              <div class="btn-play-wrap mx-auto"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"></a></div>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url({{'ppdi-frontend/images/hero_2.jpg'}});">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-7 text-center col-sm-12 element-animate">
              <div class="btn-play-wrap mx-auto"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <!-- Panel Start -->
    <section class="info-panel bg-primary">
      <div class="container pt-5 pb-5" id="panel">
          <div class="row justify-content-center">
              <div class="col-12">
                  <div class="row ml-4 mr-4">
                      <div class="col-lg ic_fasilitas text-center">
                          <img src="{{url('ppdi-frontend/images/intelektual.png')}}" class="mb-2 mt-2">
                      </div>
                      <div class="col-lg ic_fasilitas text-center">
                          <img src="{{url('ppdi-frontend/images/wheelchair.png')}}" class="mb-2 mt-2">
                      </div>
                      <div class="col-lg ic_fasilitas text-center">
                          <img src="{{url('ppdi-frontend/images/deaf-1.png')}}" class="mb-2 mt-2">
                      </div>
                      <div class="col-lg ic_fasilitas text-center">
                          <img src="{{url('ppdi-frontend/images/blind.png')}}" class="mb-2 mt-2">
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- Panel End -->

    <!-- visi & misi section -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6 element-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><span class="ion-bookmark text-primary"></span>
                <div class="media-body">
                  <h3 class="heading">Visi</h3>
                    <p>Terwujudnya partisipasi penuh dan kesamaan kesempatan penyandang disabilitas dalam segala aspek Kehidupan dan Penghidupan</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-8 col-lg-6 element-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><span class="ion-leaf text-primary"></span>
                <div class="media-body">
                  <h3 class="heading">Misi</h3>
                    <ol>
                      <li align="justify">Melakukan koordinasi dan konsultasi tentang semua hal yang berkaitan dengan ius disabilitas.</li>
                      <li align="justify">Melakukan advokasi terhadap perjuangan hak dan peningkatan kesejahteraan penyandang disabilitas.</li>
                      <li align="justify">Menyeimbangkan kewajiban dan hak penyandang disabilitas sebagai warga negara Indonesia.</li>
                      <li align="justify">Mengupayakan keterpaduan langkah, potensi penyandang disabilitas dalam rangka peningkatan kualitas, efektifitas, efesiensi dan relevansi atas kemitraan yang saling menguntungkan dan bermartabat.</li>
                      <li align="justify">Memberdayakan penyandang disabilitas agar turut berperan serta sebagai pelaku pembangunan yang mandiri, produktif dan berintegrasi.</li>
                      <li align="justify">Melakukan kampanye kepedulian dan kesadaran publik sebagai media sosialisasi dan informasi tentang penyandang disabilitas kepada masyarakat.</li>
                    </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <!-- foto section -->
    <section class="section border-t pb-0">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <a href="{{ route('foto') }}">
            <h2 class=" heading mb-4">Foto</h2></a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutters">
          @foreach ($items as $gallery)
          <div class="col-md-4 element-animate">
              <a href="{{ Storage::url($gallery->foto) }}" data-fancybox class="link-thumbnail">
                <span class="ion-eye icon"></span>
                <img src="{{ Storage::url($gallery->foto) }}" class="card-img-top"  alt="">
              </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- END section -->

    <!-- Video section -->
    <section class="section border-t pb-0">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <a href="{{ route('video') }}">
            <h2 class=" heading mb-4">Video</h2></a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutters">
          @foreach ($items2 as $gallery)
          <div class="col-md-4 element-animate">
              <a href="{{ Storage::url($gallery->video) }}" data-fancybox class="link-thumbnail">
                <video width="450" controls>
                  <source src="{{ Storage::url($gallery->video) }}" type="video/mp4" alt="">
                </video>
              </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- END section -->

    <!-- Blog Section -->
    <section class="section blog">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <a href="{{ route('blog') }}">
            <h2 class=" heading mb-4">Berita Terkini</h2></a>
          </div>
        </div>

        <div class="row">
          @foreach ($items1 as $item)
          <div class="col-md-4">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="{{ Storage::url($item->photo) }}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">{{ $item->created_at->isoFormat('D MMMM Y') }}</span>
                <h6 class="mt-2 text-black"><a href="{{ route('artikel', $item->slug) }}">{{ $item->title }}</a></h6>
                <p><a href="{{ route('artikel', $item->slug) }}" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- END Section -->

    <section class="section bg-primary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
          </div>
        </div>
      </div>
    </section>
    @endsection
