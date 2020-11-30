@extends('layouts.default')
@section('title', 'Foto')

@section('content')
    <!-- Slider Start -->
    <div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url({{'ppdi-frontend/images/hero_2.jpg'}});">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>GALERI</span></h1>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- END slider -->
    </div>
    
    <!-- Foto Start -->
    <section class="section border-t pb-0">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Foto PPDI</h2>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row text-center text-lg-left">
          <div class="col-lg-3 col-md-4 col-6">
            <a href="{{('ppdi-frontend/images/img_1.jpg')}}" class="link-thumbnail">
              <span class="ion-eye icon"></span>
              <img src="{{('ppdi-frontend/images/img_1.jpg')}}" class="card-img-top" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <a href="{{('ppdi-frontend/images/img_1.jpg')}}" class="link-thumbnail">
              <span class="ion-eye icon"></span>
              <img src="{{('ppdi-frontend/images/img_1.jpg')}}" class="card-img-top" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <a href="{{('ppdi-frontend/images/img_1.jpg')}}" class="link-thumbnail">
              <span class="ion-eye icon"></span>
              <img src="{{('ppdi-frontend/images/img_1.jpg')}}" class="card-img-top" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <a href="{{('ppdi-frontend/images/img_1.jpg')}}" class="link-thumbnail">
              <span class="ion-eye icon"></span>
              <img src="{{('ppdi-frontend/images/img_1.jpg')}}" class="card-img-top" alt="">
            </a>
          </div>
          
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <a href="{{('ppdi-frontend/images/img_1.jpg')}}" class="link-thumbnail">
              <span class="ion-eye icon"></span>
              <img src="{{('ppdi-frontend/images/img_1.jpg')}}" class="card-img-top" alt="">
            </a>
          </div>
          
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <a href="{{('ppdi-frontend/images/img_1.jpg')}}" class="link-thumbnail">
              <span class="ion-eye icon"></span>
              <img src="{{('ppdi-frontend/images/img_1.jpg')}}" class="card-img-top" alt="">
            </a>
          </div>
          
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <a href="{{('ppdi-frontend/images/img_1.jpg')}}" class="link-thumbnail">
              <span class="ion-eye icon"></span>
              <img src="{{('ppdi-frontend/images/img_1.jpg')}}" class="card-img-top" alt="">
            </a>
          </div>
          
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <a href="{{('ppdi-frontend/images/img_1.jpg')}}" class="link-thumbnail">
              <span class="ion-eye icon"></span>
              <img src="{{('ppdi-frontend/images/img_1.jpg')}}" class="card-img-top" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Foto End -->
@endsection