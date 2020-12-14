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
          @foreach ($items as $item)
          <div class="col-md-6">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="{{ route('artikel', $item->slug) }}" class="mr-5"><img src="{{ Storage::url($item->photo) }}" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">{{ $item->created_at->isoFormat('D MMMM Y') }}</span>
                <h3 class="mt-2 text-black"><a href="{{ route('artikel', $item->slug) }}">{{ $item->title }}</a></h3>
                <p><a href="{{ route('artikel', $item->slug) }}" class="readmore">Read More<span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>
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
    <!-- End Section -->
    @endsection