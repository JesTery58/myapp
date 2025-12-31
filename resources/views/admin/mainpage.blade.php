@extends('admin/layouts.app')

@section('content')

<div class="position-relative">
  <!-- Hero Carousel - Main -->
  <div id="heroMain" class="js-slick-carousel u-slick"
       data-infinite="true"
       data-autoplay="true"
       data-adaptive-height="true"
       data-speed="5000"
       data-fade="true"
       data-nav-for="#heroNav">
    <!-- Slide #1 -->
    <div class="js-slide">
      <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
        <!-- Apply your Parallax background image here -->
        <div class="divimage dzsparallaxer--target gradient-overlay-half-white-v1 bg-img-hero" style="height: 120%; background-image: url({{ url('public/img/1920x1080/img1.jpg')}});"></div>

        <!-- Content -->
        <div class="d-lg-flex align-items-lg-center">
          <div class="container position-relative z-index-2 space-2-top space-3-bottom space-5--md">
            <div class="w-50 w-md-40">
              <div class="mb-5">
                <h1 class="display-4">Grow faster</h1>
                <p class="lead">Grow faster and succeed with Space.</p>
              </div>
            </div>
            <div class="w-50">
              <a class="btn btn-primary btn-wide mb-2 mb-md-0 mr-md-2" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">Get Started</a>
              <a class="btn btn-purple btn-wide mb-2 mb-md-0" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">Learn More</a>
            </div>
          </div>
        </div>
        <!-- End Content -->
      </div>
    </div>
    <!-- End Slide #1 -->

    <!-- Slide #2 -->
    <div class="js-slide">
      <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
        <!-- Apply your Parallax background image here -->
        <div class="divimage dzsparallaxer--target gradient-overlay-half-white-v1 bg-img-hero" style="height: 120%; background-image: url({{ url('public/img/1920x1080/img2.jpg')}});"></div>

        <!-- Content -->
        <div class="d-lg-flex align-items-lg-center">
          <div class="container position-relative z-index-2 space-2-top space-3-bottom space-5--md">
            <div class="w-50 w-md-40">
              <div class="mb-5">
                <h2 class="display-4">Make it beautiful</h2>
                <p class="lead">Make it beautiful. Make your own business.</p>
              </div>
            </div>
            <div class="w-50">
              <a class="btn btn-primary btn-wide mb-2 mb-md-0 mr-md-2" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">Get Started</a>
              <a class="btn btn-purple btn-wide" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">Learn More</a>
            </div>
          </div>
        </div>
        <!-- End Content -->
      </div>
    </div>
    <!-- End Slide #2 -->

    <!-- Slide #3 -->
    <div class="js-slide">
      <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
        <!-- Apply your Parallax background image here -->
        <div class="divimage dzsparallaxer--target gradient-overlay-half-white-v1 bg-img-hero" style="height: 120%; background-image: url({{ url('public/img/1920x1080/img3.jpg')}});"></div>

        <!-- Content -->
        <div class="d-lg-flex align-items-lg-center">
          <div class="container position-relative z-index-2 space-2-top space-3-bottom space-5--md">
            <div class="w-50 w-md-40">
              <div class="mb-5">
                <h2 class="display-4">Sell business</h2>
                <p class="lead">Sell your business with Space.</p>
              </div>
            </div>
            <div class="w-50">
              <a class="btn btn-primary btn-wide mb-2 mb-md-0 mr-md-2" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">Get Started</a>
              <a class="btn btn-purple btn-wide" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">Learn More</a>
            </div>
          </div>
        </div>
        <!-- End Content -->
      </div>
    </div>
    <!-- End Slide #3 -->
  </div>
  <!-- Hero Carousel - Main -->

  <!-- Hero Carousel - Nav -->
  <div class="container position-absolute-bottom-0">
    <div id="heroNav" class="js-slick-carousel u-slick u-slick--cursor-pointer u-slick--pagination-modern u-slick--transform-off-lg mb-3"
         data-infinite="true"
         data-autoplay="true"
         data-speed="5000"
         data-center-mode="true"
         data-slides-show="3"
         data-is-thumbs="true"
         data-focus-on-select="true"
         data-nav-for="#heroMain"
         data-responsive='[{
           "breakpoint": 992,
           "settings": {
             "slidesToShow": 2
           }
         }, {
           "breakpoint": 768,
           "settings": {
             "slidesToShow": 2
           }
         }, {
           "breakpoint": 554,
           "settings": {
             "slidesToShow": 1
           }
         }]'>
      <!-- Slide #1 -->
      <div class="js-slide u-slick--pagination-modern__item">
        <div class="media align-items-center bg-white border rounded">
          <div class="media-body px-3">
            <span class="u-slick--pagination-modern__item-text">Grow faster</span>
          </div>
          <img class="u-slick--pagination-modern__item-img rounded-right" src="{{ url('public/img/200x140/img1.jpg')}}" alt="Image Description">
        </div>
      </div>
      <!-- End Slide #1 -->

      <!-- Slide #2 -->
      <div class="js-slide u-slick--pagination-modern__item">
        <div class="media align-items-center bg-white border rounded">
          <div class="media-body px-3">
            <span class="u-slick--pagination-modern__item-text">Make it beautiful</span>
          </div>
          <img class="u-slick--pagination-modern__item-img rounded-right" src="{{ url('public/img/200x140/img2.jpg')}}" alt="Image Description">
        </div>
      </div>
      <!-- End Slide #2 -->

      <!-- Slide #3 -->
      <div class="js-slide u-slick--pagination-modern__item">
        <div class="media align-items-center bg-white border rounded">
          <div class="media-body px-3">
            <span class="u-slick--pagination-modern__item-text">Sell business</span>
          </div>
          <img class="u-slick--pagination-modern__item-img rounded-right" src="{{ url('public/img/200x140/img3.jpg')}}" alt="Image Description">
        </div>
      </div>
      <!-- End Slide #3 -->
    </div>
  </div>
  <!-- Hero Carousel - Nav -->
</div>
<!-- End Hero Section -->

<!-- Features Section -->
<div class="container">
  <div class="row justify-content-lg-between align-items-md-center">
    <div class="col-md-6 order-md-2 mb-9 mb-md-0">
      <div class="mb-4">
        <span class="u-label u-label--sm u-label--purple mb-3">Why do you need it?</span>
        <h2 class="h3">All the information you need at your fingertips</h2>
        <p>Choose what information is displayed on your Summary page. Create templates that work for you and your practice. You can even customize and update them on the fly! Edit and manage Case.one to truly fit your needs as your practice grows.</p>
      </div>
    </div>

    <div class="col-md-5 order-md-1">
      <img class="w-100" src="../assets/svg/components/information-icon.svg" alt="Image Description">
    </div>
  </div>
</div>
<!-- End Features Section -->
@endsection
