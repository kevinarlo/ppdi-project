@extends('layouts.default')
@section('title', 'Hubungi Kami')

@section('content')
    <!-- Slider Start -->
    <div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url({{'ppdi-frontend/images/hero_2.jpg'}});">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Hubungi Kami</span></h1>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- END slider -->
    </div>

    <br>

    <section class="section border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 order-2">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary px-3 py-3">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 order-2 mb-5">
            <div class="row justify-content-right">
              <div class="col-md-8 mx-auto contact-form-contact-info">
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span><a href="https://goo.gl/maps/LdyDVwsMQ1dDwYTH6" target="_blank" rel="nofollow">KOMPLEK BRSPC DEPAN WISMA ASTER, Setiabakti No.15, 40522</a></span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span><a href="tel:+6282316329393">082316329393</a></span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span><a href="mailto:dpdppdijabar@gmail.com?" target="_blank" rel="nofollow">dpdppdijabar@gmail.com</a></span>
                </p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123861.89897077916!2d107.50892179356543!3d-6.926205173658866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5bbe57ec1bf%3A0xa5e5d849ea8f446e!2sDPD%20PPDI%20PROVINSI%20JAWA%20BARAT!5e0!3m2!1sid!2sid!4v1604679655997!5m2!1sid!2sid" width="450" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section -->