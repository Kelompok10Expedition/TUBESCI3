<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bikin - HTML Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/overwrite.css">
  <link href="assets/css/animate.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Bikin
    Theme URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <a class="navbar-brand" href="#">Ekspedisi</a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#pengiriman">Pengiriman</a></li>
            <li><a href="#barang">Barang</a></li>
            <li><a href="#our-team">Team</a></li>
            <li><a href="<?php echo base_url()?>user/register" >Register</a></li>
            <li><a href="<?php echo base_url()?>user/login" >LOGIN</a></li>
            
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->
  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="assets/img/ekspedisi/ekspedisi1.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2><span>Clean & Fully Modern Design</span></h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
              </div>
              
            </div>
          </div>

          <div class="item">
            <img src="assets/img/ekspedisi/ekspedisi2.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                <h2>Fully Responsive</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
              </div>
              
            </div>
          </div>
          <div class="item">
            <img src="assets/img/ekspedisi/ekspedisi3.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2>Modern Design</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

  <div id="pengiriman">
    <div class="container">
      <div class="row">
        <div class="text-center">
          <br><br><br>
          <h3>Pengiriman Barang</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
        </div>
        <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <i class="fa fa-laptop"></i>
              <h2>Responsive</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <i class="fa fa-heart-o"></i>
              <h2>Kepercayaan</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <i class="fa fa-shield"></i>
              <h2>Keamanan</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <i class="fa fa-truck"></i>
              <h2>Kualitas</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
            </div>
          </div>
        </div>
        <br>
        <br>
         <a href='view_pengiriman' class='btn btn-sm btn-info'>Cek Pengiriman</a><br>
      </div>
    </div>
  </div>

  <div id="barang">
    <div class="container">
      <div class="text-center">
        <br><br>
        <h3>Barang</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
      </div>
      <div class="row">
        <figure class="effect-chico">
          <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
            <a href="assets/img/work/1.jpg" class="flipLightBox">
            <img src="assets/img/work/1.jpg" class="img-responsive" alt="">
            </a>
          </div>
        </figure>
        <figure class="effect-chico">
          <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
            <a href="assets/img/work/2.jpg" class="flipLightBox">
            <img src="assets/img/work/2.jpg" class="img-responsive" alt="">
            </a>
          </div>
        </figure>
        <figure class="effect-chico">
          <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
            <a href="assets/img/work/3.jpg" class="flipLightBox">
            <img src="assets/img/work/3.jpg" class="img-responsive" alt="">
            </a>
          </div>
        </figure>
        <figure class="effect-chico">
          <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
            <a href="assets/img/work/4.jpg" class="flipLightBox">
            <img src="assets/img/work/4.jpg" class="img-responsive" alt="">
            </a>
          </div>
        </figure>
      </div>
    </div>
    <div class="gallery">
      <div class="container">
        <div class="row">
          <figure class="effect-chico">
            <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
              <a href="assets/img/work/5.jpg" class="flipLightBox">
              <img src="assets/img/work/5.jpg" class="img-responsive" alt="">
              </a>
            </div>
          </figure>
          <figure class="effect-chico">
            <div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
              <a href="assets/img/work/6.jpg" class="flipLightBox">
              <img src="assets/img/work/6.jpg" class="img-responsive" alt="">
              </a>
            </div>
          </figure>
          <figure class="effect-chico">
            <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
              <a href="assets/img/work/7.jpg" class="flipLightBox">
              <img src="assets/img/work/7.jpg" class="img-responsive" alt="">
              </a>
            </div>
          </figure>
          <figure class="effect-chico">
            <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
              <a href="assets/img/work/8.jpg" class="flipLightBox">
              <img src="assets/img/work/8.jpg" class="img-responsive" alt="">
              </a>
            </div>
          </figure>
        </div>
        <br>
        <br>
         <a href='view_barang' class='btn btn-sm btn-info'>Cek Barang</a><br>
      </div>
    </div>
  </div>
  <!--/#gallery-->


  <div id="our-team">
    <div class="container">
      <div class="text-center">
        <h3>Team</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
      </div>
      <div class="row">
        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <img src="assets/img/team/1.png" alt="">
            <h2>John Doe</h2>
            <h4>Founder & CEO</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
          </div>
        </div>
        <div class="col-md-4 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <img src="assets/img/team/2.png" alt="">
            <h2>John Doe</h2>
            <h4>Creative Director</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
          </div>
        </div>
        
  <!--/#our-team-->
  
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>

    <div class="social-icon">
      <div class="container">
        <div class="col-md-6 col-md-offset-3">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center">
      <div class="copyright">
        &copy; Bikin Theme. All Rights Reserved.
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bikin
          -->
          <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by BootstrapMade
        </div>
      </div>
    </div>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/parallax.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="assets/js/fliplightbox.min.js"></script>
  <script src="assets/js/functions.js"></script>
  <script src="assets/contactform/contactform.js"></script>

</body>

</html>