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
            <h2 class=" heading mb-4">Foto</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-md-4 element-animate">
            <a href="project-single.html" class="link-thumbnail">
              <h3>Ducting Design in Colorado</h3>
              <span class="ion-plus icon"></span>
              <img src="{{url('ppdi-frontend/images/img_1.jpg')}}" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="project-single.html" class="link-thumbnail">
              <h3>Tanks Project In California</h3>
              <span class="ion-plus icon"></span>
              <img src="{{url('ppdi-frontend/images/img_2.jpg')}}" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="project-single.html" class="link-thumbnail">
              <h3>Structural Design in New York</h3>
              <span class="ion-plus icon"></span>
              <img src="{{url('ppdi-frontend/images/img_3.jpg')}}" alt="Image" class="img-fluid">
            </a>
          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->

    <!-- Blog Section -->
    <section class="section blog">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Berita Terkini</h2>
          </div>
        </div>

        <div class="row">
          
          <div class="col-md-4">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="{{url('ppdi-frontend/images/img_2.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h6 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h6>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="{{url('ppdi-frontend/images/img_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h6 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h6>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="{{url('ppdi-frontend/images/img_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h6 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h6>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="{{url('ppdi-frontend/images/img_2.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h6 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h6>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="{{url('ppdi-frontend/images/img_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h6 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h6>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="{{url('ppdi-frontend/images/img_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h6 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h6>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="{{url('ppdi-frontend/images/img_2.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h6 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h6>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="{{url('ppdi-frontend/images/img_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h6 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h6>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="{{url('ppdi-frontend/images/img_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h6 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h6>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>
          </div>
          
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