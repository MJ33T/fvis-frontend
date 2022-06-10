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

</head>
<body>
  <div class="body-inner">
<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.html">
                  <img loading="lazy" src="images/favicon.png" alt="FVIS">
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle"><a href="tel:+60109097197">+60109097197</a></p>
                      </div>
                    </div>
                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

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
                <h3 class="slide-sub-title" data-animation-in="slideInRight">LOGIN</h3>
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
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">LOGIN</h3>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
              <h3 class="text-center mb-4">Login</h3>
                    <form action="/user_login" class="login-form" method="POST">
                        @csrf
                  <div class="form-group">
                      <input type="text" class="form-control rounded-left" name="email" placeholder="Username" required>
                  </div>
                <div class="form-group d-flex">
                <input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
                </div>
            <div class="form-group d-md-flex">
                <div class="w-100">
                    <label><input type="checkbox" class="" value="" style="width:auto" required> &nbsp;&nbsp; I have read and agree to the <a href="public/FVIS-PRIVACY-POLICY.pdf" target="_blank" style="text-decoration: none;">Privacy Policy </a></label> 
                    <label><input type="checkbox" class="" value="" style="width:auto" required> &nbsp;&nbsp; I have read and agree to the <a href="public/TERMS-OF-USE-SERVICES.pdf" target="_blank" style="text-decoration: none;">Term & Condition </a></label>
                </div>
            </div>            
            <div class="form-group">
                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
            </div>
          </form>
        </div>
            </div>
        </div>
    </div>
</section>



<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-md-4">
          <div class="subscribe-call-to-acton">
              <h3>Can We Help?</h3>
              <h4>(+6) 010-909-7197</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-md-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                <p class="text-white">Latest updates and news</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
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