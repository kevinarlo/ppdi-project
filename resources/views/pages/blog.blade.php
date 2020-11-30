@extends('layouts.default')
@section('title', 'Berita')

@section('content')
    <!-- Slider Start -->
    <div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url({{'ppdi-frontend/images/hero_2.jpg'}});">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>BERITA</span></h1>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- END slider -->
    </div>

    <section class="section blog">
      <div class="container">

        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Berita Terkini</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="project-single.html" class="mr-5"><img src="{{('ppdi-frontend/images/img_1.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="project-single.html">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="project-single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="#" class="mr-5"><img src="{{('ppdi-frontend/images/img_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="#">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="#" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>


          </div>
          <div class="col-md-6">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="#" class="mr-5"><img src="{{('ppdi-frontend/images/img_2.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="#">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="#" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="#" class="mr-5"><img src="{{('ppdi-frontend/images/img_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="#">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="#" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

          </div>



          <div class="col-md-6">

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="#" class="mr-5"><img src="{{('ppdi-frontend/images/img_2.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="#">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="#" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="#" class="mr-5"><img src="{{('ppdi-frontend/images/img_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="#">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="#" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>


          </div>
          <div class="col-md-6">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="#" class="mr-5"><img src="{{('ppdi-frontend/images/img_2.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="#">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="#" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="#" class="mr-5"><img src="{{('ppdi-frontend/images/img_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="#">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="#" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- End Section -->
    @endsection