@extends('layouts.default')
@section('title', 'Isi Berita')

@section('content')

    <!-- Slider Start -->
<div class="top-shadow"></div>
    <div class="inner-page">
        <div class="slider-item" style="background-image: url({{ $item->photo ? Storage::url($item->photo) : '' }});">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                        <h1 class="pt-5"><span>Isi Berita</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END slider -->
</div>
    
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12" style="margin-top: -150px;">
                    <img src="{{ Storage::url($item->photo) }}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 mt-3">
                    <h2>{{ $item->title }}</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>{!! $item->body !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection