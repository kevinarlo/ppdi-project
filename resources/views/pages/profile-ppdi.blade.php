@extends('layouts.default')
@section('title', 'Profil PPDI')

@section('content')
    <!-- Start Slider -->
    <div class="top-shadow">
      <div class="inner-page">
        <div class="slider-item" style="background-image: url({{'ppdi-frontend/images/hero_2.jpg'}});">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                <h1 class="pt-5"><span>PROFIL PPDI JAWA BARAT</span></h1>
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
            <h2>Profil Singkat</h2>
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
                <p align="justify"><strong>Penyandang Disabilitas Indonesia (PPDI)</strong> merupakan organisasi payung dan beranggotakan beragam organisasi disabilitas di Indonesia yang didirikan pada tahun 1987.</p>
                <p align="justify">Visi lembaga ini adalah mewujudkan partisipasi penuh dan persamaan kesempatan penyandang disabilitas dalam seluruh aspek kehidupan. PPDI berfungsi sebagai lembaga koordinasi dan advokasi bagi anggota-anggotanya, sedangkan bagi pemerintah PPDI merupakan mitra dalam penyusunan berbagai kebijakan dan program berkaitan penyandang disabilitas.</p>
                <p align="justify">PPDI memiliki jaringan kerja hampir diseluruh provinsi di Indonesia dan merupakan anggota dari Disabled People Internasional. Sejak tahun 2005, PPDI bersama organisasi jaringannya aktif mendorong dan memberikan konsep naskah akademis bagi proses ratifikasi CRPD hingga diterbitkannya UU No. 8 Tahun 2016 Tentang Penyandang Disabilitas.</p>
                <p align="justify"><br></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Profile Section -->
    @endsection