@extends('layouts.shuleSample')
@section('content')
<body>
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>About The School</h1>
            </div>
          </div>
        </div>
      </section>
<section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <div class="text-uppercase probootstrap-uppercase">History</div>
                  <h3>Take A Look at How We Begin</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/cons.jpg)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<section class="probootstrap-section">
        <div class="container">
          
          <div class="col-md-6">
            <p>
              <img src="img/hkk.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
            </p>
          </div>
          <div class="col-md-6 col-md-push-1">
            <h2>We are a Rongai based School focused on excellence.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
          </div>
          

        </div>
      </section>


<style>
        .single_slider.slider_bg_1 {
    background-image: url(../img/banner/001.jpg);
    background-size: cover;
    background-position: center center;
}

.single_slider.slider_bg_2 {
    background-image: url(../img/banner/001.jpg);
    background-size: cover;
    background-position: center center;
}

/********** Template CSS **********/
:root {
    --primary: #FEA116;
    --light: #F1F8FF;
    --dark: #0F172B;
}

.ff-secondary {
    font-family: 'Pacifico', cursive;
}

.fw-medium {
    font-weight: 600 !important;
}

.fw-semi-bold {
    font-weight: 700 !important;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 45px;
    bottom: 45px;
    z-index: 99;
}


/*** Spinner ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}


/*** Button ***/
.btn {
    font-family: 'Nunito', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: .5s;
}

.btn.btn-primary,
.btn.btn-secondary {
    color: #FFFFFF;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 2px;
}


/*** Navbar ***/
.navbar-dark .navbar-nav .nav-link {
    position: relative;
    margin-left: 25px;
    padding: 35px 0;
    font-size: 15px;
    color: var(--light) !important;
    text-transform: uppercase;
    font-weight: 500;
    outline: none;
    transition: .5s;
}

.sticky-top.navbar-dark .navbar-nav .nav-link {
    padding: 20px 0;
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link.active {
    color: var(--primary) !important;
}

.navbar-dark .navbar-brand img {
    max-height: 60px;
    transition: .5s;
}

.sticky-top.navbar-dark .navbar-brand img {
    max-height: 45px;
}

@media (max-width: 991.98px) {
    .sticky-top.navbar-dark {
        position: relative;
    }

    .navbar-dark .navbar-collapse {
        margin-top: 15px;
        border-top: 1px solid rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-nav .nav-link,
    .sticky-top.navbar-dark .navbar-nav .nav-link {
        padding: 10px 0;
        margin-left: 0;
    }

    .navbar-dark .navbar-brand img {
        max-height: 45px;
    }
}

@media (min-width: 992px) {
    .navbar-dark {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: transparent !important;
    }
    
    .sticky-top.navbar-dark {
        position: fixed;
        background: var(--dark) !important;
    }
}


/*** Hero Header ***/
.hero-header {
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(../img/bg-hero.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.hero-header img {
    animation: imgRotate 50s linear infinite;
}

@keyframes imgRotate { 
    100% { 
        transform: rotate(360deg); 
    } 
}

.breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, .5);
}


/*** Section Title ***/
.section-title {
    position: relative;
    display: inline-block;
}

.section-title::before {
    position: absolute;
    content: "";
    width: 45px;
    height: 2px;
    top: 50%;
    left: -55px;
    margin-top: -1px;
    background: var(--primary);
}

.section-title::after {
    position: absolute;
    content: "";
    width: 45px;
    height: 2px;
    top: 50%;
    right: -55px;
    margin-top: -1px;
    background: var(--primary);
}

.section-title.text-start::before,
.section-title.text-end::after {
    display: none;
}


/*** Service ***/
.service-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
    transition: .5s;
}

.service-item:hover {
    background: var(--primary);
}

.service-item * {
    transition: .5s;
}

.service-item:hover * {
    color: var(--light) !important;
}


/*** Food Menu ***/
.nav-pills .nav-item .active {
    border-bottom: 2px solid var(--primary);
}


/*** Youtube Video ***/
.video {
    position: relative;
    height: 100%;
    min-height: 500px;
    background: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1)), url(../img/video.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.video .btn-play {
    position: absolute;
    z-index: 3;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    box-sizing: content-box;
    display: block;
    width: 32px;
    height: 44px;
    border-radius: 50%;
    border: none;
    outline: none;
    padding: 18px 20px 18px 28px;
}

.video .btn-play:before {
    content: "";
    position: absolute;
    z-index: 0;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    display: block;
    width: 100px;
    height: 100px;
    background: var(--primary);
    border-radius: 50%;
    animation: pulse-border 1500ms ease-out infinite;
}

.video .btn-play:after {
    content: "";
    position: absolute;
    z-index: 1;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    display: block;
    width: 100px;
    height: 100px;
    background: var(--primary);
    border-radius: 50%;
    transition: all 200ms;
}

.video .btn-play img {
    position: relative;
    z-index: 3;
    max-width: 100%;
    width: auto;
    height: auto;
}

.video .btn-play span {
    display: block;
    position: relative;
    z-index: 3;
    width: 0;
    height: 0;
    border-left: 32px solid var(--dark);
    border-top: 22px solid transparent;
    border-bottom: 22px solid transparent;
}

@keyframes pulse-border {
    0% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
    }

    100% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
        opacity: 0;
    }
}

#videoModal {
    z-index: 99999;
}

#videoModal .modal-dialog {
    position: relative;
    max-width: 800px;
    margin: 60px auto 0 auto;
}

#videoModal .modal-body {
    position: relative;
    padding: 0px;
}

#videoModal .close {
    position: absolute;
    width: 30px;
    height: 30px;
    right: 0px;
    top: -30px;
    z-index: 999;
    font-size: 30px;
    font-weight: normal;
    color: #FFFFFF;
    background: #000000;
    opacity: 1;
}


/*** Team ***/
.team-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
    height: calc(100% - 38px);
    transition: .5s;
}

.team-item img {
    transition: .5s;
}

.team-item:hover img {
    transform: scale(1.1);
}

.team-item:hover {
    height: 100%;
}

.team-item .btn {
    border-radius: 38px 38px 0 0;
}


/*** Testimonial ***/
.testimonial-carousel .owl-item .testimonial-item,
.testimonial-carousel .owl-item.center .testimonial-item * {
    transition: .5s;
}

.testimonial-carousel .owl-item.center .testimonial-item {
    background: var(--primary) !important;
    border-color: var(--primary) !important;
}

.testimonial-carousel .owl-item.center .testimonial-item * {
    color: var(--light) !important;
}

.testimonial-carousel .owl-dots {
    margin-top: 24px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.testimonial-carousel .owl-dot {
    position: relative;
    display: inline-block;
    margin: 0 5px;
    width: 15px;
    height: 15px;
    border: 1px solid #CCCCCC;
    border-radius: 15px;
    transition: .5s;
}

.testimonial-carousel .owl-dot.active {
    background: var(--primary);
    border-color: var(--primary);
}


/*** Footer ***/
.footer .btn.btn-social {
    margin-right: 5px;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    border: 1px solid #FFFFFF;
    border-radius: 35px;
    transition: .3s;
}

.footer .btn.btn-social:hover {
    color: var(--primary);
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: #FFFFFF;
    font-size: 15px;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    box-shadow: none;
}

.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.footer .footer-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(255, 255, 255, .1);
}

.footer .footer-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}
</style>
   <!-- bradcam_area_start -->
   <div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3 style="color:#009DFF; font-size: 56px; font-weight: bold; font-family: Arial, sans-serif;">
                                <span>Contact Us
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5" style="padding-top:20px;">Enroll your child with us:</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4"  style="padding-left:120px;">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Call</h5>
                                <p style="text-align:justify; padding-top:20px;"><a href="tel:+254710605439">+254 7012345567</a></p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Mail</h5>
                                <p style="text-align:justify; padding-top:20px;"><a href="mailto:info@enlght.com.com">info@enlight.com</a></p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Address</h5>
                                <p style="text-align:justify; padding-top:20px;">Ongata Rongai, Kajiado</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s" style="height:500px;">
                        <iframe class="position-relative rounded w-100 h-100"
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31909.071552309175!2d36.728534669701624!3d-1.3961004564358817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f05cf50f94e8d%3A0x51c29656e6fd8ca9!2sOngata%20Rongai!5e0!3m2!1sen!2ske!4v1710881266266!5m2!1sen!2ske" width="800" height="450" style="border:0; padding-left:120px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>   
                    </div>
                </div>
            </div>
        </div>


   <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
@endsection