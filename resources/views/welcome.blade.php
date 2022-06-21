<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>FVIS</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('plugin/bootstrap/bootstrap.min.css')}}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{asset('pluginsfontawesome/css/all.min.css')}}">
  <!-- Animation -->
  <link rel="stylesheet" href="{{asset('plugin/animate-css/animate.css')}}">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="{{asset('plugin/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/slick/slick-theme.css')}}">
  <!-- Colorbox -->
  <link rel="stylesheet" href="{{asset('plugin/colorbox/colorbox.css')}}">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  @php
      use Illuminate\Support\Facades\DB;
      $msps = DB::table('socials')->get();
  @endphp

</head>
<body>
  <div class="body-inner">
<!-- Header start -->
<header id="header" class="header-one">
  

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <img loading="lazy" src="images/favicon.png" alt="FVIS">
                        <li class="nav-item"><a class="nav-link" href="/">HOME</a></li>
              
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SERVICES <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/financial_investment_services">Financing</a></li>
                                <li><a href="/commodity-trading-tips">Trading</a></li>
                                <li><a href="/expert-advice">Consultancy</a></li>
                                <li><a href="/supply-management-services">Supply</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/projects">PROJECTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="/blog">BLOG</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">CONTACT</a></li>
                        <li class="nav-item"><a class="nav-link" href="/gallery">GALLERY</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">LOGIN</a></li>
                        <li class="nav-item"><a class="nav-link" href="/signup">SIGNUP</a></li>
                        <li class="nav-item"><a class="nav-link" href="/demo">DEMO</a></li>
                        <li class="nav-item"><a class="nav-link" href="tel:+60109097197">Call Us : (+60) 10-909-7197</a></li>

                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->

<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg1.jpg)">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h3 class="slide-sub-title" data-animation-in="slideInRight">FVIS - FIRST VIBRANT INTEGRATED SERVICES</h3>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg2.jpg)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">FVIS - FIRST VIBRANT INTEGRATED SERVICES</h3>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section>
  <div class="container">
    <iframe width="1110" height="600" src="https://www.youtube.com/embed/gM8vfn3_CqE?&autoplay=1&mute=1" title="YouTube video player" frameborder="2" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
    <div class="row">
      <div class="col-md-4">
        <a href="/premium_investment">
          <img src="{{asset('Homepic/investment.jpeg')}}" style="width: 100%" height="300" alt="banner">
        </a>
        <h4 style="text-align: center">
          <a href="/premium_investment" style="color:#001e45; text-decoration: none;">INVESTMENT</a>
        </h4>
      </div>
      <div class="col-md-4">
        <a href="/investment_service">
          <img src="{{asset('Homepic/service.jpeg')}}" style="width: 100%" height="300" alt="banner">
        </a>
        <h4 style="text-align: center">
          <a href="/investment_service" style="color:#001e45; text-decoration: none;">SERVICES</a>
        </h4>
      </div>
      <div class="col-md-4">
        <a href="/our_mission">
          <img src="{{asset('Homepic/mission.jpeg')}}" style="width: 100%" height="300" alt="banner">
        </a>
        <h4 style="text-align: center">
          <a href="/our_mission" style="color:#001e45; text-decoration: none;">OUR MISSION</a>
        </h4>
      </div>
      <div class="col-md-4">
        <a href="/licenses">
          <img src="https://d11ak7fd9ypfb7.cloudfront.net/com_images/BottomRangeGrid/A1/1.jpg" style="width: 100%" height="300" alt="banner">
        </a>
        <h4 style="text-align: center">
          <a href="/licenses" style="color:#001e45; text-decoration: none;">LICENSES</a>
        </h4>
      </div>
      <div class="col-md-4">
        <a href="/gallery">
          <img src="https://d11ak7fd9ypfb7.cloudfront.net/com_images/BottomRangeGrid/A1/1.jpg" style="width: 100%" height="300" alt="banner">
        </a>
        <h4 style="text-align: center">
          <a href="/gallery" style="color:#001e45; text-decoration: none;">GALLERY</a>
        </h4>
      </div>
      <div class="col-md-4">
        <a href="/about_us">
          <img src="{{asset('Homepic/about_us.jpeg')}}" style="width: 100%" height="300" alt="banner">
        </a>
        <h4 style="text-align: center">
          <a href="/about_us" style="color:#001e45; text-decoration: none;">ABOUT US</a>
        </h4>
      </div>
     
    </div>
  </div>
</section>



  <div class="container">
    <div class="row text-center" >
        <div class="col-12">
          <h2 class="section-title">WHY CHOOSE </h2>
          <h3 class="section-sub-title">FIRST VIBRANT INTEGRATED SERVICES?</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Minimum risk</a></h3>
                <p>Our superior skills minimize risk while maximizing profits</p>
              </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Personalized Investment Plans</a></h3>
                <p>Tailor-made investment portfolios to suit your individual needs</p>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon3.png"  alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Satisfaction Guarantee</a></h3>
                <p>Guaranteed returns on your financial investments</p>
              </div>
          </div><!-- Service 3 end -->

        </div><!-- Col end -->

        <div class="col-lg-4 text-center">
          {{-- <img loading="lazy" class="img-fluid" src="images/services/service-center.jpg" alt="service-avater-image"> --}}
        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Proficient Professionals</a></h3>
                <p>30 Years’ experience across the entire financial industry</p>
              </div>
          </div><!-- Service 4 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon5.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Global Access</a></h3>
                <p>We provide investment and trading opportunities spanning the entire globe</p>
              </div>
          </div><!-- Service 5 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Power in Numbers</a></h3>
                <p>We are the world’s largest investment company</p>
              </div>
          </div><!-- Service 6 end -->
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->



  {{-- <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h3 class="section-sub-title">Gallery</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
        

        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a  href="images/projects/project1.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project1.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="/login">View Image</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project2.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project2.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="/login">View Image</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project3.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="/login">View Image</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project4.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project4.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="/login">View Image</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project5.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project5.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="/login">View Image</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project6.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project6.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="/login">View Image</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 6 end -->
        </div><!-- shuffle end -->
      </div>


    </div><!-- Content row end -->
  </div>
  <!--/ Container end --> --}}



<section class="subscribe no-padding foo">
  <div class="container">
    <div class="row">
        <div class="col-md-5">
          <div class="subscribe-call-to-acton">
              <h3 style="color: antiquewhite">Social Link</h3>
              <div class="row">
                @foreach ($msps as $msp)
                <div class="col-md-1">
                  <a href="{{$msp->social_url}}"><i style="font-size: 30px" class="fa fa-{{$msp->title}}"></i></a>
                </div>
                @endforeach
              </div>
              
          </div>
        </div><!-- Col end -->

        <div class="col-md-7">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                <p class="text-white">Latest updates and news</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="/add_newsletter" method="post">
                    <div class="form-group">
                      <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                      <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
                    </div>
                </form>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<!--/ subscribe end -->



  {{-- <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Links</h3>
            <ul class="list-arrow">
              <li><a href="/">Home</a></li>
              <li><a href="/expert-advice">Consultancy</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="/gallery">Gallery</a></li>
              <li><a href="service-single.html">Project Financing Form</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->
  </footer><!-- Footer end --> --}}


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugin/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugin/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugin/slick/slick.min.js"></script>
  <script src="plugin/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugin/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugin/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugin/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>
  

  </div><!-- Body inner end -->
  </body>

  </html>