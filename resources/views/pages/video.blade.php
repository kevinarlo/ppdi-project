@extends('layouts.default')
@section('title', 'Video')

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
    
    <!-- Video Section -->
    <section class="section border-t pb-0">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Video PPDI</h2>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row text-center text-lg-left">
          @foreach ($items as $gallery)
          <div class="col-lg-3 col-md-4 col-6">
            <video width="270" controls>
              <source src="{{ Storage::url($gallery->video) }}" type="video/mp4" alt="">
            </video>
          </div>
          @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-5">
          <nav>
              <ul class="pagination">
                  <li class="page-item">
                      {{ $items->links('pagination::bootstrap-4') }}
                  </li>
              </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- END Video section -->
    @endsection