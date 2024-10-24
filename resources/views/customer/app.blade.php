<html lang="en">
<head>
     <title>E-Learning - IdeaThings</title>
     
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="landing/css/bootstrap.min.css">
     <link rel="stylesheet" href="landing/css/font-awesome.min.css">
     <link rel="stylesheet" href="landing/css/owl.carousel.css">
     <link rel="stylesheet" href="landing/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="landing/css/templatemo-style.css">
     <link rel="stylesheet" href="landing/css/bootstrap.min.css">
     <link rel="shortcut icon" type="image/png" href="admin/images/logos/IdeaThings.png" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
     <style>
          .horizontal-carousel {
              position: relative;
              display: flex;
              align-items: center;
              overflow: hidden;
          }
      
          .testimonial-list {
              display: flex;
              gap: 20px; /* Jarak antara item */
              overflow-x: auto;
              scroll-behavior: smooth;
          }
      
          .testimonial-item {
              min-width: 300px; /* Sesuaikan dengan lebar yang diinginkan */
              background-color: #f9f9f9;
              padding: 20px;
              border-radius: 5px;
          }
      
          .tst-image {
              text-align: center;
              margin-bottom: 15px;
          }
      
          .tst-image img {
              border-radius: 50%;
          }
      
          .tst-author {
              text-align: center;
              margin-bottom: 10px;
          }
      
          .tst-rating {
              text-align: center;
              margin-top: 10px;
          }
      
          .carousel-btn {
              background-color: #f1f1f1;
              border: none;
              padding: 10px;
              cursor: pointer;
          }
      
          .carousel-btn:hover {
              background-color: #ddd;
          }
      
          .left-btn {
              position: absolute;
              left: 0;
              z-index: 1;
          }
      
          .right-btn {
              position: absolute;
              right: 0;
              z-index: 1;
          }
      </style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader" style="display: none;">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     @include('customer.navbar')


    <!-- HOME -->
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme home-slider">
                    <!-- Full width and height item -->
                    <div class="item" style="height: 100vh;"> <!-- Set height -->
                        <div class="courses-thumb">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="landing/images/slider-image2.jpg" class="img-responsive" alt="home slider image" style="width: 100%; height: 100%; object-fit: cover;"> <!-- Change the source to your image -->
                                </div>
                                <div class="courses-date">
                                    <div class="col-md-6 col-sm-12">
                                        <h1>Distance Learning Education Center</h1>
                                        <h3>Our online courses are designed to fit your industry, supporting
                                            all-round development with the latest technologies.</h3>
                                        <a href="#courses" class="btn btn-success mt-4">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height: 100vh;"> <!-- Set height -->
                        <div class="courses-thumb">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="landing/images/slider-image3.jpg" class="img-responsive" alt="home slider image" style="width: 100%; height: 100%; object-fit: cover;"> <!-- Change the source to your image -->
                                </div>
                                <div class="courses-date">
                                    <div class="col-md-6 col-sm-12">
                                        <h1>Distance Learning Education Center</h1>
                                        <h3>Our online courses are designed to fit your industry, supporting
                                            all-round development with the latest technologies.</h3>
                                        <a href="#courses" class="btn btn-success mt-4">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height: 100vh;"> <!-- Set height -->
                        <div class="courses-thumb">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="landing/images/slider-image1.jpg" class="img-responsive" alt="home slider image" style="width: 100%; height: 100%; object-fit: cover;"> <!-- Change the source to your image -->
                                </div>
                                <div class="courses-date">
                                    <div class="col-md-6 col-sm-12">
                                        <h1>Distance Learning Education Center</h1>
                                        <h3>Our online courses are designed to fit your industry, supporting
                                            all-round development with the latest technologies.</h3>
                                        <a href="#courses" class="btn btn-success mt-4">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more items as needed -->
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURE -->
    <section id="feature">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="feature-thumb">
                        <span>01</span>
                        <h3>Online Courses</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et
                            dolore magna.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="feature-thumb">
                        <span>02</span>
                        <img src="" alt="">
                        <h3>Offline Courses</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et
                            dolore magna.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="feature-thumb">
                        <span>03</span>
                        <h3>Certified Teachers</h3>
                        <p>templatemo delivers a wide variety of HTML5 templates for you at absolutely no charge. Please
                            tell your friends.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section id="about">
     <div class="container">
         <div class="row text-center mb-5">
             <h2>Start your journey to a better life with online practical courses</h2>
         </div>
         <div class="row">
             <div class="col-md-4 col-sm-12">
                 <div class="card">
                     <div class="feature-thumb">
                         <h3>100++ Courses</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                 </div>
             </div>
 
             <div class="col-md-4 col-sm-12">
                 <div class="card active-card">
                     <div class="feature-thumb">
                         <h3>100++ Courses</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                 </div>
             </div>
 
             <div class="col-md-4 col-sm-12">
                 <div class="card">
                     <div class="feature-thumb">
                         <h3>100++ Courses</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="row text-center">
          <button class="btn btn-success mt-4">Discover More</button>
      </div>
 </section>


    <!-- TEAM -->
    <section id="team">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Teachers <small>Meet Professional Trainers</small></h2>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="landing/images/author-image1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Mark Wilson</h3>
                            <span>I love Teaching</span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="landing/images/author-image2.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Catherine</h3>
                            <span>Education is the key!</span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-google"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="landing/images/author-image3.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Jessie Ca</h3>
                            <span>I like Online Courses</span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="landing/images/author-image4.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Andrew Berti</h3>
                            <span>Learning is fun</span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google"></a></li>
                            <li><a href="#" class="fa fa-behance"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Popular Courses <small>Upgrade your skills with newest courses</small></h2>
                         </div>
                         <!-- Owl Carousel Slider -->
                         <div class="owl-carousel owl-theme">
                              <!-- Course Item 1 -->
                              <div class="item">
                                   <div class="courses-thumb">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="landing/images/courses-image1.jpg" class="img-responsive" alt="course image">
                                        </div>
                                        <div class="courses-date">
                                             <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                             <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                        </div>
                                   </div>
                                   <div class="courses-detail">
                                        <h3><a href="#">Social Media Management</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                   </div>
                                   <div class="courses-info">
                                        <div class="courses-author">
                                             <img src="landing/images/author-image1.jpg" class="img-responsive" alt="author">
                                             <span>Mark Wilson</span>
                                        </div>
                                        <div class="courses-price">
                                             <a href="#"><span>USD 25</span></a>
                                        </div>
                                   </div>
                                   </div>
                              </div>
                              <!-- Course Item 2 -->
                              <div class="item">
                                   <div class="courses-thumb">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="landing/images/courses-image2.jpg" class="img-responsive" alt="course image">
                                        </div>
                                        <div class="courses-date">
                                             <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                             <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                        </div>
                                   </div>
                                   <div class="courses-detail">
                                        <h3><a href="#">Graphic & Web Design</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                   </div>
                                   <div class="courses-info">
                                        <div class="courses-author">
                                             <img src="landing/images/author-image2.jpg" class="img-responsive" alt="author">
                                             <span>Jessica</span>
                                        </div>
                                        <div class="courses-price">
                                             <a href="#"><span>USD 80</span></a>
                                        </div>
                                   </div>
                                   </div>
                              </div>
                              <div class="item">
                                   <div class="courses-thumb">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="landing/images/courses-image1.jpg" class="img-responsive" alt="course image">
                                        </div>
                                        <div class="courses-date">
                                             <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                             <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                        </div>
                                   </div>
                                   <div class="courses-detail">
                                        <h3><a href="#">Social Media Management</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                   </div>
                                   <div class="courses-info">
                                        <div class="courses-author">
                                             <img src="landing/images/author-image1.jpg" class="img-responsive" alt="author">
                                             <span>Mark Wilson</span>
                                        </div>
                                        <div class="courses-price">
                                             <a href="#"><span>USD 25</span></a>
                                        </div>
                                   </div>
                                   </div>
                              </div>
                              <!-- Course Item 2 -->
                              <div class="item">
                                   <div class="courses-thumb">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="landing/images/courses-image2.jpg" class="img-responsive" alt="course image">
                                        </div>
                                        <div class="courses-date">
                                             <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                             <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                        </div>
                                   </div>
                                   <div class="courses-detail">
                                        <h3><a href="#">Graphic & Web Design</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                   </div>
                                   <div class="courses-info">
                                        <div class="courses-author">
                                             <img src="landing/images/author-image2.jpg" class="img-responsive" alt="author">
                                             <span>Jessica</span>
                                        </div>
                                        <div class="courses-price">
                                             <a href="#"><span>USD 80</span></a>
                                        </div>
                                   </div>
                                   </div>
                              </div>
                              <!-- Add more items as needed -->
                         </div>
                    </div>
               </div>
          </div>
     </section>


    <!-- TESTIMONIAL -->
    <section id="testimonial">
     <div class="container">
         <div class="row">
             <div class="col-md-12 col-sm-12">
                 <div class="section-title">
                     <h2>Student Reviews <small>from around the world</small></h2>
                 </div>
 
                 <!-- Horizontal Testimonial Carousel -->
                 <div class="horizontal-carousel">
                     <button id="scrollLeftTestimonial" class="carousel-btn left-btn"><i class="fa fa-angle-left"></i></button>
                     
                     <div class="testimonial-list">
                         <!-- Testimonial Item 1 -->
                         <div class="testimonial-item">
                             <div class="tst-image">
                                 <img src="landing/images/tst-image1.jpg" class="img-responsive" alt="Jackson">
                             </div>
                             <div class="tst-author">
                                 <h4>Jackson</h4>
                                 <span>Shopify Developer</span>
                             </div>
                             <p>You really do help young creative minds to get quality education and professional job search assistance. I’d recommend it to everyone!</p>
                             <div class="tst-rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                         </div>
 
                         <!-- Testimonial Item 2 -->
                         <div class="testimonial-item">
                             <div class="tst-image">
                                 <img src="landing/images/tst-image3.jpg" class="img-responsive" alt="Barbie">
                             </div>
                             <div class="tst-author">
                                 <h4>Barbie</h4>
                                 <span>Art Director</span>
                             </div>
                             <p>Donec erat libero, blandit vitae arcu eu, lacinia placerat justo. Sed sollicitudin quis felis vitae hendrerit.</p>
                             <div class="tst-rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                         </div>
 
                         <!-- Testimonial Item 3 -->
                         <div class="testimonial-item">
                             <div class="tst-image">
                                 <img src="landing/images/tst-image4.jpg" class="img-responsive" alt="Andrio">
                             </div>
                             <div class="tst-author">
                                 <h4>Andrio</h4>
                                 <span>Web Developer</span>
                             </div>
                             <p>Nam eget mi eu ante faucibus viverra nec sed magna. Vivamus viverra sapien ex, elementum varius ex sagittis vel.</p>
                             <div class="tst-rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                             </div>
                         </div>
 
                         <!-- Tambahkan testimoni lainnya sesuai kebutuhan -->
                     </div>
 
                     <button id="scrollRightTestimonial" class="carousel-btn right-btn"><i class="fa fa-angle-right"></i></button>
                 </div>
             </div>
         </div>
     </div>
 </section>


    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="" method="post">
                        <div class="section-title">
                            <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" placeholder="Enter full name" name="name"
                                required="">

                            <input type="email" class="form-control" placeholder="Enter email address"
                                name="email" required="">

                            <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message"
                                required=""></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <input type="submit" class="form-control" name="send message" value="Send Message">
                        </div>

                    </form>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="contact-image">
                        <img src="landing/images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2>Headquarter</h2>
                        </div>
                        <address>
                            <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
                        </address>

                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>

                        <div class="copyright-text">
                            <p>Copyright © 2018 Company</p>
                            <p>Design: <a rel="nofollow" href="http://templatemo.com" title="html5 templates"
                                    target="_parent">Template Mo</a></p>
                            <p>Distribution: <a href="https://themewagon.com/">ThemeWagon</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2>Contact Info</h2>
                        </div>
                        <address>
                            <p>+65 2244 1100, +66 1800 1100</p>
                            <p><a href="mailto:youremail.com">hello@youremail.co</a></p>
                        </address>

                        <div class="footer_menu">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Investor</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="footer-info newsletter-form">
                        <div class="section-title">
                            <h2>Newsletter Signup</h2>
                        </div>
                        <div>
                            <div class="form-group">
                                <form action="#" method="get">
                                    <input type="email" class="form-control" placeholder="Enter your email"
                                        name="email" id="email" required="">
                                    <input type="submit" class="form-control" name="submit" id="form-submit"
                                        value="Send me">
                                </form>
                                <span><sup>*</sup> Please note - we do not spam your email.</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
     <script src="landing/js/jquery.js"></script>
     <script src="landing/js/bootstrap.min.js"></script>
     <script src="landing/js/owl.carousel.min.js"></script>
     <script src="landing/js/smoothscroll.js"></script>
     <script src="landing/js/custom.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
     <script>
          $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
          margin: 10,
          loop: true,  <!-- Looping functionality -->
          nav: true,  <!-- Adds the navigation arrows -->
          dots: true,  <!-- Enable or disable dots navigation -->
          responsive: {
               0: { items: 1 },  <!-- Mobile view -->
               600: { items: 2 },  <!-- Tablets -->
               1000: { items: 3 }  <!-- Desktop view -->
          }
          });
          });
     </script>
     <script>
          const testimonialContainer = document.querySelector('.testimonial-list');
          const scrollLeftTestimonialBtn = document.getElementById('scrollLeftTestimonial');
          const scrollRightTestimonialBtn = document.getElementById('scrollRightTestimonial');
      
          scrollLeftTestimonialBtn.addEventListener('click', function() {
              testimonialContainer.scrollBy({
                  left: -300,  // Sesuaikan dengan lebar item
                  behavior: 'smooth'
              });
          });
      
          scrollRightTestimonialBtn.addEventListener('click', function() {
              testimonialContainer.scrollBy({
                  left: 300,  // Sesuaikan dengan lebar item
                  behavior: 'smooth'
              });
          });
      </script>

</body>

</html>
