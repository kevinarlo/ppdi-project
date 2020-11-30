@extends('layouts.default')
@section('title', 'Sejarah PPDI')

@section('content')

    <!-- Start Slider -->
    <div class="top-shadow">
      <div class="inner-page">
        <div class="slider-item" style="background-image: url({{'ppdi-frontend/images/hero_2.jpg'}});">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                <h1 class="pt-5"><span>SEJARAH PPDI</span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END slider -->
    
<!-- Profile Section -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2>Sejarah PPDI</h2>
      </div>
    </div>
    
    <div class="row align-items-stretch">
      <div class="col-lg-4 order-lg-1">
        <div class="h-100">
          <div class="frame h-100">
            <img src="{{('ppdi-frontend/images/ppdi.png')}}" class="img-fluid" alt="Responsive image"></div>
        </div>
      </div>

      <div class="col-md-8 col-lg-8 feature-1-wrap d-md-flex flex-md-column order-lg-1" >
        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <p align="justify">PERKUMPULAN PENYANDANG DISABILITAS  INDONESIA” atau disingkat PPDI dibentuk pada tanggal 11 Maret 1987, berkedudukan di wilayah Negara Kesatuan Republik Indonesia. PPDI bersifat non partisan dan terbuka bagi seluruh organisasi sosial penyandang disabilitas, organisasi sosial disabilitas dan organisasi kemasyarakatan penyandang disabilitas tingkat nasional.</p>
            <p align="justify">PPDI adalah payung bagi organisasi sosial penyandang disabilitas, organisasi sosial disabilitas dan organisasi kemasyarakatan penyandang disabilitas sesuai dengan tingkat kedudukannya berfungsi sebagai wadah perjuangan, koordinasi, konsultasi, advokasi dan sosialisasi disabilitas di tingkat nasional dan internasional.</p>
            <p align="justify">PPDI bertujuan memperjuangkan pemenuhan hak-hak penyandang disabilitas agar memperoleh kesamaan kesempatan dalam segala aspek kehidupan dan penghidupan serta dapat berpartisipasi penuh dalam pembengunan nasional.</p>
            <p align="justify"><br></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Profile Section -->

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
    @endsection
