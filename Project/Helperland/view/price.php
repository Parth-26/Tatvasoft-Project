<!Doctype HTML>
<html>
    <head>
        <title>
            Prices | Helperland
        </title>
        <style>
          <?php 
          include "assets/css/prices.css";
          ?>
        </style>
        <link type="text/css" rel="stylesheet" href="assets/css/prices.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--Navbar-->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light navbar-bg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php"><img class="ps-3" src="assets/images/logo-small.png"/></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse position-relative" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <button class="book-btn px-4" value="Book a Cleaner">Book now</button>
                        </li>
                        <li class="nav-item ps-2">
                            <button class="book-btn px-4" value="Prices & Serices" action="price.php">Prices & Serices</button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Warranty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                            <button class="book-btn px-4" value="Book a Cleaner">Login</button>
                        </li>
                        <li class="nav-item ps-2">
                            <button class="book-btn px-4" value="Book a Cleaner">Become a helper</button>
                        </li>
                    </ul>
                  </div>
                </div>
              </nav>
            <div>
                <img class="img-fluid" src="assets/images/group-18.png" alt="Worker Image">
            </div>
        </header>
            <!--Prices-->
            <div>
                <div class="text-center">
                    <h2 class="pt-4">Prices</h2>
                    <span>
                        <img class="pe-2" src="assets/images/rectangle-5.png"/>
                        <img src="assets/images/forma-1-copy-5.png"/>
                        <img class="ps-2" src="assets/images/rectangle-5.png"/>
                    </span>
                    </div>
                    <div class="pt-3 d-flex justify-content-center">
                    <div class="card w-25">
                        <h5 class="text-white text-center price-color fs-2">One Time</h5>
                        <div class="card-body">
                          <h5 class="card-title text-center"><span class="fs-1 fw-bold">&euro;20</span>/hr</h5>
                          <div>
                              <span>
                                  <img src="assets/images/forma-1_5.png"/>
                                  <p class="d-inline">Lower Prices</p>
                              </span>
                          </div>
                          <div>
                            <span>
                                <img src="assets/images/forma-1_5.png"/>
                                <p class="d-inline">Easy online & secure payment</p>
                            </span>
                        </div>
                        <div>
                            <span>
                                <img src="assets/images/forma-1_5.png"/>
                                <p class="d-inline">Easy amendment</p>
                            </span>
                        </div>
                        </div>
                      </div>
                    </div>
            </div>
            <!--Prices over-->
            <div class="hori-line container py-4"></div>
            <!--Extra services-->
            <div class="container">
                <div class="text-center">
                    <h2 class="pt-4">Extra Services</h2>
                    <span>
                        <img class="pe-2" src="assets/images/rectangle-5.png"/>
                        <img src="assets/images/forma-1-copy-5.png"/>
                        <img class="ps-2" src="assets/images/rectangle-5.png"/>
                    </span>
                </div>
                <div class="services">
                    <label class="px-5">
                        <span class="circle">
                            <span class="img-align">
                            <center>
                            <img src="assets/images/3.png"/>
                            </center>
                            </span>
                        </span>
                        <span class="d-block">Inside Canbinets</span>
                        <span class="work-time">30 Minutes</span>
                    </label>
                    <label class="px-5">
                            <span class="circle">
                                <span class="position-relative">
                                <center>
                                <img src="assets/images/5.png"/>
                                </center>
                                </span>
                            </span>
                            <span class="d-block">Inside fridge</span>
                            <span class="work-time">30 Minutes</span>
                    </label>
                    <label class="px-5">
                            <span class="circle">
                                <span class="position-relative">
                                <center>
                                <img src="assets/images/4.png"/>
                                </center>
                                </span>
                            </span>
                            <span class="d-block">Inside oven</span>
                            <span class="work-time">30 Minutes</span>
                    </label>
                    <label class="px-5">
                            <span class="circle">
                                <span class="position-relative">
                                <center>
                                <img src="assets/images/2.png"/>
                                </center>
                                </span>
                            </span>
                            <span class="d-block">Laundry wash & dry</span>
                            <span class="work-time">30 Minutes</span>
                    </label>
                    <label class="px-5">
                            <span class="circle">
                                <span class="position-relative">
                                <center>
                                <img src="assets/images/1.png"/>
                                </center>
                                </span>
                            </span>
                            <span class="d-block">Interior windows</span>
                            <span class="work-time">30 Minutes</span>
                    </label>
                    
                </div>
            </div>
            <!--Extra services over-->
            <!--What we include in cleaning-->
            <div class="includation pb-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="pt-4">What we include in cleaning</h2>
                    <span>
                        <img class="pe-2" src="assets/images/rectangle-5.png"/>
                        <img src="assets/images/forma-1-copy-5.png"/>
                        <img class="ps-2" src="assets/images/rectangle-5.png"/>
                    </span>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center pt-3">
                    <div class="col">
                      <div>
                        <img src="assets/images/group-18_3.png" class="card-img-top" alt="...">
                        <div class="card-body includation">
                          <h5 class="card-title">Bedroom and Living Room</h5>
                          <div>
                            <img class="d-inline" src="assets/images/right-arrow.png"/>
                            <p class="d-inline ps-1 text-size-include">Dust all accessible surfaces </p>
                            </div>
                            <div>
                                <img class="d-inline" src="assets/images/right-arrow.png"/>
                                <p class="d-inline ps-1 text-size-include">Wipe down exterior of stove, oven and fridge </p>
                            </div>
                            <div>
                                <img class="d-inline" src="assets/images/right-arrow.png"/>
                                <p class="d-inline ps-1 text-size-include">Clean all floor surfaces </p>                                
                            </div>
                            <div>
                                <img class="d-inline" src="assets/images/right-arrow.png"/>
                                <p class="d-inline ps-1 text-size-include">Take out garbage and recycling</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div>
                        <img src="assets/images/group-18_4.png" class="card-img-top" alt="...">
                        <div class="card-body includation">
                          <h5 class="card-title">Bathrooms</h5>
                          <div>
                            <img class="d-inline" src="assets/images/right-arrow.png"/>
                            <p class="d-inline ps-1 text-size-include">Wash and sanitize the toilet, shower, tub, sink </p>
                        </div>
                          <div>
                            <img class="d-inline" src="assets/images/right-arrow.png"/>
                            <p class="d-inline ps-1 text-size-include">Dust all accessible surfaces </p>
                            </div>
                            <div>
                                <img class="d-inline" src="assets/images/right-arrow.png"/>
                                <p class="d-inline ps-1 text-size-include">Wipe down exterior of stove, oven and fridge </p>
                            </div>
                            <div>
                                <img class="d-inline" src="assets/images/right-arrow.png"/>
                                <p class="d-inline ps-1 text-size-include">Clean all floor surfaces </p>                                
                            </div>
                            <div>
                                <img class="d-inline" src="assets/images/right-arrow.png"/>
                                <p class="d-inline ps-1 text-size-include">Take out garbage and recycling</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div>
                        <img src="assets/images/group-18_2.png" class="card-img-top" alt="...">
                        <div class="card-body includation border-0">
                          <h5 class="card-title">Kitchen</h5>
                            <div>
                            <img class="d-inline" src="assets/images/right-arrow.png"/>
                            <p class="d-inline ps-1 text-size-include">Dust all accessible surfaces </p>
                            </div>
                            <div>
                                <img class="d-inline" src="assets/images/right-arrow.png"/>
                                <p class="d-inline ps-1 text-size-include">Empty sink and load up dishwasher </p>
                            </div>
                            <div>
                                <img class="d-inline" src="assets/images/right-arrow.png"/>
                                <p class="d-inline ps-1 text-size-include">Wipe down exterior of stove, oven and fridge </p>
                            </div>
                            <div>
                                <img class="d-inline" src="assets/images/right-arrow.png"/>
                                <p class="d-inline ps-1 text-size-include">Clean all floor surfaces </p>                                
                            </div>
                            <div>
                                <img class="d-inline" src="assets/images/right-arrow.png"/>
                                <p class="d-inline ps-1 text-size-include">Take out garbage and recycling</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            </div>
            <!--What we include in cleaning over-->
            <!--Why Helperland-->
            <div class="pb-4">
                <div class="text-center">
                    <h2 class="pt-4">Why Helperland</h2>
                    <span>
                        <img class="pe-2" src="assets/images/rectangle-5.png"/>
                        <img src="assets/images/forma-1-copy-5.png"/>
                        <img class="ps-2" src="assets/images/rectangle-5.png"/>
                    </span>
                </div>
                <div class="container pt-3">
                    <div class="row">
                    <span class="col">
                        <div>
                            <h4>
                                Experienced and vetted professionals
                            </h4>
                            <h6>
                                dominate the industry in scale and scope with an adaptable, extensive network that consistently delivers exceptional results.
                            </h6>
                        </div>
                        <div>
                            <h4>
                                Dedicated customer service
                            </h4>
                            <h6>
                                to our customers and are guided in all we do by their needs. The team is always happy to support you and offer all the information. you need.
                            </h6>
                        </div>
                    </span>
                    <span class="col">
                        <img src="assets/images/the-best-img-1.png"/>
                    </span>
                    <span class="col">
                        <div>
                            <h4>
                                Every cleaning is insured
                            </h4>
                            <h6>
                                and seek to provide exceptional service and engage in proactive behavior. We'd be happy to clean your homes.
                            </h6>
                        </div>
                        <div>
                            <h4>
                                Secure online payment
                            </h4>
                            <h6>
                                Payment is processed securely online. Customers pay safely online and manage the booking.
                            </h6>
                        </div>
                    </span>
                    </div>
                </div>
            </div>
            <!--Why Helperland over-->
          <!--  <div class="container">
            <div class=" d-flex justify-content-center">
                <div>
                <h3 class="text-center">GET OUR NEWSLETTER</h3>
            </div>
                <div>
                    <form class="pt-2 d-block">
                        <input class="letter-style" type="text" placeholder="YOUR EMAIL"/>
                        <button class="submit-btn" type="Submit">Submit</button>
                    </form>
                </div>
            </div>
    </div>-->
            <!--Footer-->
            <footer class="bg-dark">
                <nav class="navbar">
                    <span>
                        <img class="ps-1" src="assets/images/logo-small.png"/>
                        </span>
                        <span>
                        <ul class="nav px-4">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">TESTIMONIALS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="faqs.php">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">INSURANCE POLICY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">IMPRESSUM</a>
                        </li>
                        </ul>
                    </span>
                    <span>
                        <img src="assets/images/ic-facebook.png"/>
                        <img class="ps-1 pe-5" src="assets/images/ic-instagram.png"/>
                    </span>
                </nav>
                <div class="hori-line container pb-1"></div>
                <div class="container text-center pt-2 pb-2">
                    <span class="text-white">@2018 Helperland All rights reserved</span>
                    <span>&nbsp <a class="text-white" href="#">Terms and Conditions</a> <span class="sep px-1"></span> <a class="text-white" href="#">Privacy Policy</a></span>
                </div>
              </footer>
    </body>
</html>