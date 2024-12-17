<!doctype html>
<html lang="en">

  <head>
    <title>Fleet Runway</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- FontAwesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .fas {
            font-size: 40px;
            color: #007bff; /* Set icon color */
        }

        .fas.fa-wrench {
            color: #28a745; /* Green color for maintenance */
        }

        .fas.fa-map-marker-alt {
            color: #ff5722; /* Orange color for GPS */
        }
    </style>    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      <div class="top-bar">
        <div class="container">
          <div class="row">
            {{-- <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@pcocar.com</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">+44 (208) 1333138</span></a>
              <div class="float-right">
                <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="site-logo">
              <a href="{{route('uisheet')}}" class="text-black"><span class="text-primary">Fleet Runway</a>
            </div>
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="#home-section" class="nav-link">Home</a></li>
                  <li><a href="#services-section" class="nav-link">Services</a></li>
                  <li>
                    <a href="#about-section" class="nav-link">About Us</a>
                  </li>
                  <li><a href="#why-us-section" class="nav-link">Why Us</a></li>
                  {{-- <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li> --}}
                  {{-- <li><a href="#blog-section" class="nav-link">Blog</a></li> --}}
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  <li><a href="{{ route('login') }}" class="nav-link">Sign In</a></li>
                </ul>
              </nav>
            </div>
            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </header>
      <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/depot_hero_1.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
              <div class="col-lg-6">
                <h1>Fleet Management</h1>
                <p class="mb-5">Fleet Management System is a comprehensive solution designed to streamline and optimize the operations of vehicle fleets across various industries.</p>
                {{-- <form action="#">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Your tracking number">
                    <input type="submit" class="btn btn-primary text-white px-4" value="Track Now">
                  </div>
                </form> --}}
              </div>
            </div>
          </div>
        </div>
        <!-- END .ftco-cover-1 -->
        {{-- <div class="site-section ftco-service-image-1 pb-5">
          <div class="container">
            <div class="owl-carousel owl-all">
              <div class="service text-center">
                <a href="#"><img src="images/depot_img_1.jpg" alt="Image" class="img-fluid"></a>
                <div class="px-md-3">
                  <h3><a href="#">Truck Insurance</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos numquam incidunt!</p>
                </div>
              </div>
              <div class="service text-center">
                <a href="#"><img src="images/depot_img_2.jpg" alt="Image" class="img-fluid"></a>
                <div class="px-md-3">
                  <h3><a href="#">Plane Transportation</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos numquam incidunt!</p>
                </div>
              </div>
              <div class="service text-center">
                <a href="#"><img src="images/depot_img_3.jpg" alt="Image" class="img-fluid"></a>
                <div class="px-md-3">
                  <h3><a href="#">Sea &amp; Ear Freight</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos numquam incidunt!</p>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="site-section bg-light" id="services-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1">
                <h2>Services</h2>
                <p>We provide exceptional services to our partners, ensuring a seamless and stress-free experience. Here's what we offer:</p>
              </div>
            </div>
          </div>
          <div class="owl-carousel owl-all">
            <div class="block__35630 text-center">
              <div class="icon mb-0">
                <span><i class="fa-solid fa-map-location-dot"></i></span>
              </div>
              <h3 class="mb-3">Real-Time GPS Tracking</h3>
              <ul>
                <li>Monitor vehicle locations in real-time.</li>
                <li>Historical route playback to analyze past trips.</li>
              </ul>
            </div>

            <div class="block__35630 text-center">
              <div class="icon mb-0">
                <span><i class="fa-solid fa-screwdriver-wrench"></i></span>
              </div>
              <h3 class="mb-3">Vehicle Maintenance Management</h3>
                <ul>
                    <li>Automatic maintenance scheduling based on mileage, engine hours, or time.</li>
                    <li>Maintenance history logs for cost and compliance tracking.</li>
                </ul>
            </div>
            <div class="block__35630 text-center">
              <div class="icon mb-0">
                <span class=""><i class="fa-solid fa-chart-pie"></i></span>
              </div>
              <h3 class="mb-3">Fleet Analytics and Reporting</h3>
              <ul>
                <li>Comprehensive dashboards showing fleet performance.</li>
                <li>Predictive analytics to forecast vehicle needs or replacements.</li>
              </ul>
            </div>
            <div class="block__35630 text-center">
              <div class="icon mb-0">
                <span><i class="fa-solid fa-file-contract" style="color: #007bff;"></i></span>
              </div>
              <h3 class="mb-3">Compliance and Documentation</h3>
              <ul>
                <li>Vehicle inspection reports (DVIR) for safety checks</li>
                <li>Documentation storage for insurance, permits, and registrations.</li>
              </ul>
            </div>
            <div class="block__35630 text-center">
                <div class="icon mb-0">
                  <span><i class="fa-solid fa-clipboard-list"></i></span>
                </div>
                <h3 class="mb-3">Hassle-Free MOT & Licensing</h3>
                <ul>
                  <li>We take care of all MOT and licensing services on behalf of our partners.</li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="site-section" id="about-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                <figure class="block-img-video-1" data-aos="fade">
                    <a href="https://vimeo.com/45830194" data-fancybox data-ratio="2">
                        {{-- <span class="icon"><span class="icon-play"></span></span> --}}
                        <img src="images/depot_delivery_1.jpg" alt="Image" class="img-fluid">
                    </a>
                </figure>
            </div>
            <div class="col-md-6 text-center">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>About Us</h2>
                <p>PCO car fleets are groups of vehicles licensed for private hire services, commonly used for platforms like Uber and Bolt in the UK. These fleets typically include eco-friendly cars such as hybrids or electric vehicles to meet Transport for London (TfL), Wolverhampton Council & Knowsley Council regulations, including ULEZ compliance. Vehicles are well-maintained, ensuring safety, comfort, and reliability for passengers. Fleet operators often provide rental options with insurance, maintenance, and PCO compliance support, making it easier for drivers to start earning. PCO car fleets play a key role in providing efficient and sustainable urban transportation.</p>
              </div>
            </div>
            <div class="col-12">
                <div class="row">
                  <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
                    <div class="block-counter-1">
                      <span class="number"><span data-number="15">0</span>+</span>
                      <span class="caption">Years in Service</span>
                    </div>
                  </div>
                  <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-counter-1">
                      <span class="number"><span data-number="1500">0</span>+</span>
                      <span class="caption">Employees</span>
                    </div>
                  </div>
                  <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="block-counter-1">
                      <span class="number"><span data-number="10">0</span>+</span>
                      <span class="caption">Covered Cities</span>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      {{-- <div class="site-section bg-light" id="about-section">
        <div class="container">
          <div class="row justify-content-center mb-4 block-img-video-1-wrap">
            <div class="col-md-12 mb-5">
              <figure class="block-img-video-1" data-aos="fade">
                <a href="https://vimeo.com/45830194" data-fancybox data-ratio="2">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="images/depot_delivery_1.jpg" alt="Image" class="img-fluid">
              </a>
              </figure>
            </div>
          </div>
          <div class="row">
            
          </div>
        </div>
      </div> --}}
      <div class="site-section" id="team-section">
        {{-- <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Our Staff</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="owl-carousel owl-all mb-5">
            <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Max Carlson</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
            <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Charlotte Pilat</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
            <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Nicole Lewis</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
            </div>
        </div> --}}
      {{-- <div class="site-section bg-light" id="pricing-section">
        <div class="container">
          <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Pricing</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
              <div class="pricing">
                <h3 class="text-center text-black">Basic</h3>
                <div class="price text-center mb-4 ">
                  <span><span>$47</span> / year</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">
                  <li>Officia quaerat eaque neque</li>
                  <li>Possimus aut consequuntur incidunt</li>
                  <li class="remove">Lorem ipsum dolor sit amet</li>
                  <li class="remove">Consectetur adipisicing elit</li>
                  <li class="remove">Dolorum esse odio quas architecto sint</li>
                </ul>
                <p class="text-center">
                  <a href="#" class="btn btn-secondary btn-md">Buy Now</a>
                </p>
              </div>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing">
                <h3 class="text-center text-black">Premium</h3>
                <div class="price text-center mb-4 ">
                  <span><span>$200</span> / year</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">
                  <li>Officia quaerat eaque neque</li>
                  <li>Possimus aut consequuntur incidunt</li>
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipisicing elit</li>
                  <li class="remove">Dolorum esse odio quas architecto sint</li>
                </ul>
                <p class="text-center">
                  <a href="#" class="btn btn-primary btn-md text-white">Buy Now</a>
                </p>
              </div>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing">
                <h3 class="text-center text-black">Professional</h3>
                <div class="price text-center mb-4 ">
                  <span><span>$750</span> / year</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">
                  <li>Officia quaerat eaque neque</li>
                  <li>Possimus aut consequuntur incidunt</li>
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipisicing elit</li>
                  <li>Dolorum esse odio quas architecto sint</li>
                </ul>
                <p class="text-center">
                  <a href="#" class="btn btn-secondary btn-md">Buy Now</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="site-section" id="faq-section">
        <div class="container">
          <div class="row mb-5">
            <div class="block-heading-1 col-12 text-center">
              <h2>Frequently Ask Questions</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">Possimus aut consequuntur incidunt?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">Dolorum esse odio quas architecto sint?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">Possimus aut consequuntur incidunt?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">Dolorum esse odio quas architecto sint?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">Lorem ipsum dolor sit</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">consequuntur incidunt?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">Possimus aut consequuntur incidunt?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">Dolorum esse odio quas architecto sint?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="block__73694 site-section border-top" id="why-us-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">
            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('images/header-car.jpg');" data-aos="fade-left" data-aos-delay="">
            </div>
            <div class="col-lg-6 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-4 text-black">Why Fleetrunway?</h2>
              <p>Fleetrunway, Empowering businesses with smarter, safer, and more efficient fleet management solutions—optimizing operations, reducing costs, and driving success with every mile.</p>
              <ul class="ul-check primary list-unstyled mt-5">
                <li>Reliable Support</li>
                <li>Data-Driven Insights</li>
                <li>Streamlined Maintenance</li>
                <li>Real-time GPS tracking for vehicles</li>
                <li>Driver and Safety Management</li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      {{-- <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
        <div class="container">
          <div class="text-center mb-5">
            <div class="block-heading-1">
              <h2>Happy Clients</h2>
            </div>
          </div>
          <div class="owl-carousel nonloop-block-13">
            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4">
                  <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt
                    and made herself on the way.&rdquo;</p>
                </blockquote>
                <figure>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Ricky Fisher</h3>
              </div>
            </div>
            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4">
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <figure>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>
              </div>
            </div>
            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4">
                  <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                </blockquote>
                <figure>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Mellisa Griffin</h3>
              </div>
            </div>
            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                </blockquote>
                <figure>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="site-section py-5" id="blog-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
                <h2>Articles</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-5 d-block blog-entry" data-aos="fade-right" data-aos-delay="">
                <a href="single.html" class="blog-thumbnail mb-3 d-block"><img src="images/depot_img_1.jpg" alt="Image" class="img-fluid"></a>
                <div class="blog-excerpt">
                  <span class="d-block text-muted">Apr 19, 2019</span>
                  <h2 class="h4  mb-3"><a href="single.html">Knowing the Difference Is Key to Effective Logistics</a></h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                  <p><a href="single.html" class="text-primary">Read More</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-5 d-block blog-entry" data-aos="fade-right" data-aos-delay="">
                <a href="single.html" class="blog-thumbnail mb-3 d-block"><img src="images/depot_img_2.jpg" alt="Image" class="img-fluid"></a>
                <div class="blog-excerpt">
                  <span class="d-block text-muted">Apr 19, 2019</span>
                  <h2 class="h4  mb-3"><a href="single.html">Knowing the Difference Is Key to Effective Logistics</a></h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                  <p><a href="single.html" class="text-primary">Read More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row"> 
            <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                <div class="block-heading-1">
                <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 maps" >
                <b>London Office</b>
                <div class="mapouter">
                  <div class="gmap_canvas">
                        <iframe width="600" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=373%20-%20High%20Road%20ILFORD%20%2C%20IG1%201TF&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <b class="float-left" >Manchester Office</b>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1885.6321124692004!2d-2.2404646845999796!3d53.48558398000838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb1b8850cd28d%3A0xdeee2b3fa03bec95!2sShudehill%20Interchange!5e1!3m2!1sen!2s!4v1615887493662!5m2!1sen!2s" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/"></a>
                    </div>
                    <style>
                        .mapouter{position:relative;text-align:right;height:500px;width:600px;}
                        .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}
                    </style>
                </div>
                <div>
                    <p class="mt-5 mb-1">Booking Service / Support : 9:00am - 6:00pm [Monday - Sunday]</p>
                    <p class="mb-1">Emergency : 24/7 Monday - Sunday</p>
                    <p>Collection Time : 9:00AM - 6:00PM [Monday - Friday]</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <b>Contact Us</b>
                <form method="post" enctype="multipart/form-data" action="{{url('contactus')}}">
                {{ csrf_field() }} 
                    <div class="form-group row">
                        <div class="col-md-12 mb-4 mb-lg-0">
                            <input type="text" pattern="[A-Za-z\s]+" name="name" class="form-control mt-2" maxlength="30" placeholder="Enter Name" required>
                        </div>
                        <div class="col-md-12">
                            <input type="email" name="email"  class="form-control mt-2" maxlength="30" placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="" class="form-control mt-2"  pattern="^[0-9-+\s()]*$"  name="phone" maxlength="20" placeholder="Enter Phone" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea class="form-control" maxlength="50" id="exampleFormControlTextarea1" placeholder="Detail" rows="3" ></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 mr-auto">
                        <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
    <footer class="site-footer pt-5" id="contact-section">
      <div class="container">
        <div class="row"> 
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>PCO car fleets are groups of vehicles licensed for private hire services, commonly used for platforms like Uber and Bolt in the UK.</p>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <!-- Theme's logo -->
                        {{-- <img src="{{ asset('public/theme3/assets/img/logo2.png')}}" alt="logo" style="height:60px" /> --}}
                        <div class="site-logo">
                            <a style="font-size: xx-large;" href="{{route('uisheet')}}" class="text-black"><span class="text-primary">Fleet Runway</a>
                        </div>
                        <!-- Webpixels' mission -->
                        <!--<p class="mt-4 text-sm opacity-8 pr-lg-4">PCOCAR Limited is authorised and regulated by the Financial Conduct Authority for entering into regulated hire agreements</p>-->
                        <br> <br>
                        <h3 style="color:white;" >For Contact</h3>
                        <i class="fas fa-phone mt-3"></i> <a class="footer-links" href="tel:+442081333138">MOBILE : 442081333138</a><br>
                        <i class="fas fa-envelope mt-3"></i> <a class="footer-links" href="email:info@pcocar.com " >Email : info@pcocar.com </a>
                        <br>
                    </div>
                </div>
            </div>
          {{-- <div class="col-md-3 ml-auto">
            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
            </div>
            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div> --}}
        </div>
      </div>
        <hr class="my-4" style="border: 0;border-top: 1px solid white;">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright text-sm font-weight-bold text-center text-md-left">    
              &copy; 2021 <a href="{{route('uisheet')}}" class="font-weight-bold" target="_blank">Fleetrunway</a>. All rights reserved
          </div>
        </div>
      </div>
    </footer>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
