@extends('layouts.shuleSample')
@section('content')
<body>
      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url(img/ws.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Your Child's Future is Our Mission</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(img/df.jpeg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>Welcome to Enlight School</h2>
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
                  <h3>About School</h3>
                  <p>Step into the halls of Enlight School, where every student's journey begins with a promise of discovery, growth, and success. Here, we foster a vibrant community where curiosity is ignited, talents are honed, and friendships flourish. With dedicated educators, innovative programs, and a commitment to excellence, we empower each individual to reach their fullest potential.</p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/ss.png)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="930" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Students Enrolled</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="26" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Certified Teachers</span>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-library"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="70" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Passing to Universities</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
               
               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Parents Satisfaction</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/gn.jpeg)">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Highlights</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Featured News</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Upcoming Events</a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                      <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/schtry.jpeg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>New SchoolTry system </h3>
                              <p>We recently acquired a new school system called SchoolTry. Parents are required to provide their emails.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>March 19, 2024</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/ks.jpeg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tablets now available</h3>
                              <p>In light of new developments, tablets will now be available for all students.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>March 19, 2024</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/ll.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Art class</h3>
                              <p>Now available for students at extra charges. All inclusive of leaning equipments for the class </p> 
                              <span class="probootstrap-date"><i class="icon-calendar"></i>March 19, 2024</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/ll.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Art class</h3>
                              <p>Now available for students at extra charges. All inclusive of leaning equipments for the class </p> 
                              <span class="probootstrap-date"><i class="icon-calendar"></i>March 19, 2024</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">View all news</a></p>  
                    </div>
                  </div>
                </div>
                <div id="upcoming-events" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl2">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/agm.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>AGM coming up!</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>June 19, 2024</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/closing.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Term 1 coming to an end</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i> April 19, 2024</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/candidate.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Candidates parents meeting</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>Augast 19, 2023</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/sports.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Sports Day Coming Up</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>May 19, 2023</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">View all events</a></p>  
                    </div>
                  </div>
                </div>

              </div>
            
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Our Featured Courses</h2>
              <p class="lead">Most common subjects in the school</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/eng.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> January 5, 2024</span>
                  <h3>English Activities</h3>
                  <p>English is more than just words on a page; it's the bridge between cultures, the tool of expression, and the key to unlocking endless worlds of imagination.</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">900 students enrolled</span></p>
                </div>
              </div>
</div>

              <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/mathsclass.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> January 5, 2024</span>
                  <h3>Mathematical Activities</h3>
                  <p>Mathematics is the language of patterns, the logic of shape, and the foundation of countless discoveries. Mostly liked by grade 3 students </p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">900 students enrolled</span></p>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </section>

      
      
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Meet Our Qualified Teachers</h2>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/tch1.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Bonface Mlunje</h3>
                  <p>Physical Education</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/tchr2.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Janet Kisiko</h3>
                  <p>English Teacher</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/tchr4.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Linda Njeri</h3>
                  <p>Math Teacher</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/tchr3.png" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Jessa Kiplagat</h3>
                  <p>Physics Teacher</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/alumni.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Alumni Testimonial</h2>
              <p class="lead">Some testimonies from our former students.</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                <div class="item">

                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;As an alumni of Enlight School, I am forever grateful for the foundation of knowledge, values, and friendships that were cultivated during my time there. The nurturing environment and dedicated educators at Enlight School instilled in me a love for learning, resilience in the face of challenges, and a sense of community that continues to shape my journey today. &rdquo; <cite class="author"> &mdash; <span>Mike Fisher</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;My years at Enlight School were more than just classrooms and textbooks; they were the building blocks of my character and aspirations. The supportive teachers, enriching experiences, and lifelong friendships I forged at [Primary School Name] laid the groundwork for my academic and personal growth.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Reflecting on my journey from Enlight School, I am reminded of the invaluable lessons and cherished memories that have shaped who I am today. The caring mentors, vibrant learning environment, and diverse opportunities provided by Enlight School ignited my passion for knowledge and instilled within me a sense of purpose.&rdquo; <cite class="author">&mdash; <span>Brandon White</span></cite></blockquote>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Why Choose Enlight School</h2>
            </div>
          </div>
          <div class="row">
    <div class="col-md-6">
        <div class="service left-icon probootstrap-animate">
            <div class="icon"><i class="icon-checkmark"></i></div>
            <div class="text">
                <h3>Exceptional Education</h3>
                <p>Our school provides an exceptional education that goes beyond textbooks, fostering a love for learning and nurturing each student's unique talents and abilities.</p>
            </div>  
        </div>
        <div class="service left-icon probootstrap-animate">
            <div class="icon"><i class="icon-checkmark"></i></div>
            <div class="text">
                <h3>Dedicated Teachers</h3>
                <p>With dedicated teachers who are passionate about education, students receive personalized attention and guidance to achieve their academic goals.</p>
            </div>
        </div>
        <div class="service left-icon probootstrap-animate">
            <div class="icon"><i class="icon-checkmark"></i></div>
            <div class="text">
                <h3>Inclusive Community</h3>
                <p>Our inclusive community celebrates diversity and encourages collaboration, creating a supportive environment where every student feels valued and respected.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="service left-icon probootstrap-animate">
            <div class="icon"><i class="icon-checkmark"></i></div>
            <div class="text">
                <h3>Enriching Opportunities</h3>
                <p>From extracurricular activities to experiential learning opportunities, our school offers a wide range of enriching experiences to broaden students' horizons.</p>
            </div>  
        </div>
        <div class="service left-icon probootstrap-animate">
            <div class="icon"><i class="icon-checkmark"></i></div>
            <div class="text">
                <h3>Safe and Supportive Environment</h3>
                <p>At our school, student safety and well-being are our top priorities. We provide a safe and supportive environment where students can thrive academically and socially.</p>
            </div>
        </div>
        <div class="service left-icon probootstrap-animate">
            <div class="icon"><i class="icon-checkmark"></i></div>
            <div class="text">
                <h3>Preparation for Success</h3>
                <p>Through rigorous academics, critical thinking skills, and character development, we prepare students to excel in an ever-changing world and become responsible global citizens.</p>
            </div>
        </div>
    </div>
</div>

          <!-- END row -->
        </div>
      </section>
      
 
  </body>
@endsection