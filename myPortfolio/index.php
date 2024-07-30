<!DOCTYPE html>

<html lang="">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>My Portfolio</title>

         <!-- Favicons -->
        <link href="../img/favicon.png" rel="icon">
        <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../vendor/aos/aos.css" rel="stylesheet">
        <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="../css/main.css" rel="stylesheet">

        <!-- Styles -->
      
        <style>

            /* * Template Name: FlexStart
            * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
            * Updated: Jun 29 2024 with Bootstrap v5.3.3
            * Author: BootstrapMade.com
            * License: https://bootstrapmade.com/license/ */
            .php-email-form input.invalid{box-shadow: 0 0 3px #d92800 !important; border: 1px solid #d92800 !important;}
            .img-fluid{margin-top: 50px;}
          

        </style>
    </head>


    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

          <a href="/" class="logo d-flex align-items-center me-auto">
            <img src="../img/this.png" alt="logo">
          </a>

          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="/" class="active">Home<br></a></li>
               <li class="dropdown"><a href="#about"><span>About Me</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="#education">Education</a></li>
                      <li><a href="#work">Experiences</a></li>
                    </ul>
                  </li>
              </li>
              <li><a href="#portfolio">Projects</a></li>
              <li><a href="#skills">Skills</a></li>
              <li><a href="#recent-posts">Blog</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

          <!-- {{-- <a class="btn-getstarted flex-md-shrink-0" href="index.html#about">Get Started</a> --}}

          @if (Route::has('login'))
          @auth
              <a href="{{ url('/home') }}" class="btn-getstarted flex-md-shrink-0">Home</a>
          @else
              <a href="{{ route('login') }}" class="btn-getstarted flex-md-shrink-0">Log in</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="btn-getstarted flex-md-shrink-0">Register</a>
              @endif
          @endauth
      @endif -->

        </div>
      </header>

<body>

          <main class="main">

            <!-- Hero Section -->
            <section id="hero" class="hero section">

              <div class="container">
                <div class="row gy-4">
                  <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Hi<span>,</span> I am <br> Rosemarie Requina<span>.</span></h1>
                    <p data-aos="fade-up" data-aos-delay="100">Web Developer specializing in modern web technologies.</p>
                    <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                      <!-- <a href="#about" class="">Get Started <i class="bi bi-arrow-right"></i></a> -->
                      <a href="../files/Rosemarie-Requina-Resume.pdf" target="_blank" rel="noopener noreferrer" class="btn-get-started glightbox d-flex  ms-0 ms-md-0 mt-0 mt-md-0"><span>Download Resume </span><i class="bi bi-download" width="16" height="16" fill="currentColor"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="../img/cover.png" class="img-fluid animated" alt="">
                  </div>
                </div>
              </div>

            </section><!-- /Hero Section -->

            <!-- About Section -->
            <section id="about" class="about section">

              <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                  <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                      <h3>About Me</h3>
                      <p>
                      I embarked on my web development journey more than two years ago. Throughout this time, I've refined my skills through practical experience in both development and production roles. My aim is to deliver user-friendly and efficient web solutions.
                      </p>
                      <div class="text-center text-lg-start">
                        <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                          <span>Read More</span>
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out-left flip-right" data-aos-delay="200">
                    <img src="../img/me1.png" class="img-fluid animated" data-aos="zoom-out-left flip-right" data-aos-easing="ease-out-cubic"  data-aos-duration="3000" max-width="65%" alt="">
                  </div>

                </div>
              </div>

            </section><!-- /About Section -->

            <!-- Values Section -->
            <section id="values" class="values section">

              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Career</h2>
                <p>Objective<br></p>
              </div><!-- End Section Title -->

              <div class="container">

                <div class="row gy-4">

                  <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                      <p>Creative and technical web development professional years of experience with proficiency as well as ability to communicate effectively in a team setting and at the same time serve the company to the best of my capabilities. I would like to earn more skills utilizing my current area of expertise of procurement and employee satisfaction services.</p>
                    </div>
                  </div><!-- End Card Item -->


                </div>

              </div>

            </section><!-- /Values Section -->

            <!-- Education Section -->
            <section id="education" class="services section">

              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                    <p>Education</p>
              </div><!-- End Section Title -->

              <div class="container">

                <div class="row gy-12">

                  <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                      <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" color="#012a73" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z"/>
                      </svg>
                      <h3>Bachelor of Science in Computer Science</h3>
                      <h4>Mindanao State University - Maigo School of Arts and Trades<br>
                        Maigo, Lanao del Norte</h4>
                      <h5>2012 - 2016</h5>
                    </div>
                  </div><!-- End education Item -->

                </div>
              </div>

            </section><!-- /education Section -->

                <!-- Work Experience Section -->
                <section id="work" class="team section">

                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                      <h2>Work</h2>
                      <p>Experience</p>
                    </div><!-- End Section Title -->

                    <div class="container">

                      <div class="row gy-12">

                        <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="100">
                          <div class="team-member">
                            <div class="member-info">
                              <h3>Web Developer</h3>
                              <h5>Proweaver PH<span>May 2022 - June 2024</span></h5>
                              <p>
                                <i class="bi bi-arrow-right-circle"></i> Converted website online forms based on client requests and concerns.</br>
                                <i class="bi bi-arrow-right-circle"></i> Implemented tasks and resolved queries related to forms.</br>
                                <i class="bi bi-arrow-right-circle"></i> Maintained website code quality and functionalities.</br>
                                <i class="bi bi-arrow-right-circle"></i> Monitored and documented SMTP and API delivery reports.</br>
                              </p>
                            </div>
                          </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="100">
                          <div class="team-member">
                            <div class="member-info">
                                <h3>Production Specialist</h3>
                                <h5>Onsemiconductor Philippines<span>Nov 2016 - Apr 2018</span></h5>
                              <p>
                                <i class="bi bi-arrow-right-circle"></i> Operated machinery and equipment as per instructions.<br>
                                <i class="bi bi-arrow-right-circle"></i> Inspected products for defects and ensured quality standards were met.<br>
                                <i class="bi bi-arrow-right-circle"></i> Ensured smooth and efficient operations.<br>
                                  &nbsp;</br>
                              </p>
                            </div>
                          </div>
                        </div><!-- End Team Member -->


                      </div>

                    </div>

                  </section><!-- /Work Experience Section -->



            <!-- Portfolio Section -->
            <section id="portfolio" class="portfolio section">

              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Projects</h2>
                <p>Check my latest projects</p>
              </div><!-- End Section Title -->

            <div class="container">

                  <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-app">
                      <div class="portfolio-content">
                        <img src="../img/portfolio/Project-1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                          <h4>Project 1 - Laravel Student System</h4>
                          <p>
                            • Using Node.js <br>
                            • Authentication for Login<br>
                            <em>Ongoing...</em>
                          </p>
                          <a href="../img/portfolio/Project-1.png" title="Project 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                          <a href="https://github.com/roxibels-str/my-first-project.git" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                      </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-app">
                      <div class="portfolio-content">
                        <img src="../img/portfolio/Project-2.png" class="img-fluid"  alt="">
                        <div class="portfolio-info">
                          <h4>Project 2 </h4>
                          <p>
                            <em>Ongoing...</em><br>
                             <br>
                          </p>
                          <a href="../img/portfolio/Project-2.png" title="Project 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                          <a href="https://github.com/roxibels-str/symfony_project.git" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                      </div>
                    </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

            </section><!-- /Portfolio Section -->

          
               
            <!-- skills Section -->
                <section id="skills" class="stats section">

                  <div class="container section-title" data-aos="fade-up" >
                      <p>Skills</p>
                    </div><!-- End Section Title -->

                    <div class="container" data-aos="fade-up" data-aos-delay="100">

                      <div class="row gy-4">

                        <div class="col-lg-3 col-md-6">
                          <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-percent"></i>
                            <div>
                              <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1" aria-valuemax="100" class="purecounter"></span>
                              <p>HTML & CSS</p>
                            </div>
                          </div>
                        </div><!-- End skills Item -->

                        <div class="col-lg-3 col-md-6">
                          <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-percent flex-shrink-0" style="color: #ff1aff;"></i>
                            <div>
                              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" aria-valuemax="100"  class="purecounter"></span>
                              <p>PHP</p>
                            </div>
                          </div>
                        </div><!-- End skills Item -->

                        <div class="col-lg-3 col-md-6">
                          <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-percent flex-shrink-0" style="color:#751aff"></i>
                            <div>
                              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" aria-valuemax="100" class="purecounter"></span>
                              <p>SQL</p>
                            </div>
                          </div>
                        </div><!-- End skills Item -->

                        <div class="col-lg-3 col-md-6">
                          <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-percent flex-shrink-0" style="color: #339900;"></i>
                            <div>
                              <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" aria-valuemax="100" class="purecounter"></span>
                              <p>JavaScript (JS)</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                          <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-percent flex-shrink-0" style="color: #15be56;"></i>
                            <div>
                              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" aria-valuemax="100" class="purecounter"></span>
                              <p>Web Dev Frameworks</p>
                            </div>
                          </div>
                        </div><!-- End skills Item -->

                        <div class="col-lg-3 col-md-6">
                          <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-percent flex-shrink-0" style="color: #bb0852;"></i>
                            <div>
                              <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" aria-valuemax="100" class="purecounter"></span>
                              <p>WordPress</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                          <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-percent flex-shrink-0" style="color: #4040bf;"></i>
                            <div>
                              <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" aria-valuemax="100" class="purecounter"></span>
                              <p>Bootstrap</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                          <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-percent flex-shrink-0" style="color: #009999;"></i>
                            <div>
                              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" aria-valuemax="100" class="purecounter"></span>
                              <p>APIs (RESTful, SOAP)</p>
                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                  </section><!-- /skills Section -->


          
            <!-- Recent Posts Section -->
            <section id="recent-posts" class="recent-posts section">

              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Recent Posts</h2>
                <p>Blog<br>
                </p>
                <small style="color:red;"><em>More blog post will be posted here soon...</em></small>
              </div><!-- End Section Title -->

              <div class="container">

                <div class="row gy-5">

                  <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                      <div class="post-img position-relative overflow-hidden">
                        <img src="img/blog/blog-image.png" class="img-fluid" alt="">
                        <span class="post-date">Date</span>
                      </div>

                      <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Dummy Post</h3>

                        <div class="meta d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <i class="bi bi-person"></i> <span class="ps-2">Author Name</span>
                          </div>
                          <span class="px-3 text-black-50">/</span>
                          <div class="d-flex align-items-center">
                            <i class="bi bi-folder2"></i> <span class="ps-2">dummy text</span>
                          </div>
                        </div>

                        <hr>

                        <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                      </div>

                    </div>
                  </div><!-- End post item -->

                  <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                      <div class="post-img position-relative overflow-hidden">
                        <img src="img/blog/blog-image.png" class="img-fluid" alt="">
                        <span class="post-date">Date</span>
                      </div>

                      <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Dummy Post</h3>

                        <div class="meta d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <i class="bi bi-person"></i> <span class="ps-2">Author Name</span>
                          </div>
                          <span class="px-3 text-black-50">/</span>
                          <div class="d-flex align-items-center">
                            <i class="bi bi-folder2"></i> <span class="ps-2">dummy text</span>
                          </div>
                        </div>

                        <hr>

                        <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                      </div>

                    </div>
                  </div><!-- End post item -->

                  <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="post-item position-relative h-100">

                      <div class="post-img position-relative overflow-hidden">
                        <img src="img/blog/blog-image.png" class="img-fluid" alt="">
                        <span class="post-date">Date</span>
                      </div>

                      <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Dummy Post</h3>

                        <div class="meta d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <i class="bi bi-person"></i> <span class="ps-2">Author Name</span>
                          </div>
                          <span class="px-3 text-black-50">/</span>
                          <div class="d-flex align-items-center">
                            <i class="bi bi-folder2"></i> <span class="ps-2">dummy text</span>
                          </div>
                        </div>

                        <hr>

                        <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                      </div>

                    </div>
                  </div><!-- End post item -->

                </div>

              </div>

            </section><!-- /Recent Posts Section -->

         <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
        
          <p>Contact</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">

            <div class="col-lg-6">

              <div class="row gy-4">
                <div class="col-md-6">
                    <div class="info-item" data-aos="fade" data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>88 Golden Sundrive, Banilad Rd,</p>
                    <p>Cebu City, 6000</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item" data-aos="fade" data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>Phone</h3>
                    <mark>+63 999 451 4632</mark>
                    <p>&nbsp;</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item" data-aos="fade" data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <a href="mailto:requinarose711@gmail.com">requinarose711@gmail.com</a>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item" data-aos="fade" data-aos-delay="500">
                        <i class="bi bi-linkedin"></i>
                        <h3>LinkedIn</h3>
                        <a href="https://www.linkedin.com/in/rosemarie-r-65ba2a318" target="_blank" rel="noopener noreferrer">Rosemarie Requina</a>
                    </div>
                </div><!-- End Info Item -->

              </div>

            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">


                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name *" required >
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email *" required>
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject *" required>
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" ></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit" id="btn_submit">Send Message</button>
                  </div>

                </div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>

      </section><!-- /Contact Section -->
          </main>

          <footer id="footer" class="footer">
          <div class="container copyright text-center mt-4">
            <p><span>Copyright © 2024</span> <strong class="px-1 sitename">FlexStart</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you've purchased the pro version. -->
             
              <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
              Designed by <a href="https://bootstrapmade.com/"><strong>BootstrapMade</strong></a><br>
              <a href="https://bootstrapmade.com/license/">Licensing Information</a>
            </div>
          </div>


          </footer>

     </body>
     </html>

          <!-- Scroll Top -->
          <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

          <!-- Vendor JS Files -->
          <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="../vendor/php-email-form/validate.js"></script>
          <script src="../vendor/aos/aos.js"></script>
          <script src="../vendor/glightbox/js/glightbox.min.js"></script>
          <script src="../vendor/purecounter/purecounter_vanilla.js"></script>
          <script src="../vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
          <script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
          <script src="../vendor/swiper/swiper-bundle.min.js"></script>

          <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script>
            // Require form fields
            if(document.addEventListener){
            document.addEventListener('invalid', function(e){
              e.target.className += ' invalid';
            }, true);
          }
          $(".php-email-form input").on('input', function() {
          $(".php-email-form input").removeClass('invalid').addClass('error');
          });
        </script>

          <!-- Main JS File -->
          <script src="../js/main.js"></script>


