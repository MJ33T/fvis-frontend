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
<header id="header" class="header-one hea">
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
                        <li class="nav-item"><a class="nav-link" href="tel:+60109097197">Call Us : (+6) 010-909-7197</a></li>

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

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="signup-wrap p-4 p-md-5">
              <h3 style="color: antiquewhite" class="text-center mb-6">SIGNUP</h3>
                    <form action="/user_signup" class="login-form" method="POST">
                        @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="f_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="l_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control " name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control " name="a_code" placeholder="Acceptance Code" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control " name="m_number_ex" placeholder="Number Extension" >
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control " name="m_number" placeholder="Mobile Number" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control " name="h_phone" placeholder="Home Phone" required>
                        </div>
                        <div class="form-group col-md-6">
                        <input type="text" class="form-control " name="r_country" placeholder="Country of Resident" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="date" class="form-control " name="dob" placeholder="Date of Birth" required>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" name="col">
                                <option selected>Type of Service</option>
                                <option>Project Inspection</option>
                                <option>Factory Inspection</option>
                                <option>Product Inspection</option>
                                <option>Commodity Trading</option>
                                <option>Investment Advisory</option>
                                <option>Business Planing</option>
                                <option>Office Setup</option>
                                <option>Legal and Licensing</option>
                                <option>Lands and Properties</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="add_one" id="" cols="30" rows="5" placeholder="Address One"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="add_two" id="" cols="30" rows="5" placeholder="Address Two"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label style="color: antiquewhite"><input type="checkbox" class="" value="" style="width:auto" required> &nbsp;&nbsp; I have read and agree to the <a href="public/FVIS-PRIVACY-POLICY.pdf" target="_blank" style="text-decoration: none;">Privacy Policy </a></label> 
                            <label style="color: antiquewhite"><input type="checkbox" class="" value="" style="width:auto" required> &nbsp;&nbsp; I have read and agree to the <a href="public/TERMS-OF-USE-SERVICES.pdf" target="_blank" style="text-decoration: none;">Term & Condition </a></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">SIGNUP</button>
                    </div>
                </div>         
            
          </form>
        </div>
            </div>
        </div>
    </div>
</section>



<section class="subscribe no-padding foo">
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
<style>
  .foo{
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    background-color: #003B49;
  }
  .ftco-section{
    margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 105vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
  }
</style>


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