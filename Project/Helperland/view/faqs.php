<!Doctype HTML>
<html>
    <head>
        <title>
            FAQs | Helperland
        </title>
        <style>
          <?php 
          include "assets/css/faqs.css";
          ?>
        </style>
        <script>
            function avtive(){
            document.getElementById('#faq').click(function()
{
    if ( $(this).hasClass('active') ) {
        $(this).removeClass('active');
    } else {
        $('li a.active').removeClass('active');
        $(this).addClass('active');    
    }
});
            };
            function shocontent()
            {
                documrnt.
            }
        </script>
        <link type="text/css" rel="stylesheet" href="faqs.css">
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
                  <a class="navbar-brand" href="index.php">
                    <img class="ps-3" src="assets/images/logo-small.png"/></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse position-relative" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <button class="book-btn px-4" value="Book a Cleaner">Book now</button>
                        </li>
                        <li class="nav-item ps-2">
                            <button class="book-btn px-4" value="Prices & Serices">Prices & Serices</button>
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
            <!--header image-->
            <div>
                <img class="img-fluid" src="assets/images/faq-banner.png" alt="FAQ Image">
            </div>
        </header>
        <!--FAQ content-->
        <div class="container-xl">
            <div class="text-center">
            <h2 class="pt-4">FAQs</h2>
            <span>
                <img class="pe-2" src="assets/images/rectangle-5.png"/>
                <img src="assets/images/forma-1-copy-5.png"/>
                <img class="ps-2" src="assets/images/rectangle-5.png"/>

            </span>
            </div>
            <div class="fs-4">
            <p class="text-center">Whether you are Customer or Service provider, <br/>We have tried our best to solve all your queries and questions.</p>
            </div>
            <div class="container">
                <div class="d-flex justify-content-center">
            <ul class="nav nav-tabs w-75" id="myTab" role="tablist">
                <li class="nav-item w-50" role="presentation">
                <button class="nav-link active w-100 faq-btn" id="cust" data-bs-toggle="tab" data-bs-target="#custfaq" type="button" role="tab" aria-controls="custfaq" aria-selected="true">For customer</button>
                </li>
                <li class="nav-item w-50" role="presentation">
                <button class="nav-link w-100 faq-btn" id="service" data-bs-toggle="tab" data-bs-target="#serfaq" type="button" role="tab" aria-controls="serfaq" aria-selected="false">For service provider</button>
                </li>
            </ul>
            </div>
<div class="tab-content container" id="myTabContent">
  <div class="tab-pane fade show active c id="custfaq" role="tabpanel" aria-labelledby="cust">
    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h5 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Accordion Item #1
        </button>
    </h5>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet porro ex atque, ipsam, quisquam eligendi, consectetur fugit perspiciatis quo explicabo aliquid accusantium! At, quisquam? Saepe sit quasi voluptas magnam ipsa.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h5 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Accordion Item #2
      </button>
    </h5>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet porro ex atque, ipsam, quisquam eligendi, consectetur fugit perspiciatis quo explicabo aliquid accusantium! At, quisquam? Saepe sit quasi voluptas magnam ipsa.
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h5 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accordion Item #3
      </button>
    </h5>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet porro ex atque, ipsam, quisquam eligendi, consectetur fugit perspiciatis quo explicabo aliquid accusantium! At, quisquam? Saepe sit quasi voluptas magnam ipsa.
    </div>
    </div>
  </div>
</div>
  </div>
  <div class="tab-pane fade" id="serfaq" role="tabpanel" aria-labelledby="service">
  <div class="accordion accordion-flush" id="accordionFlushExample1">
  <div class="accordion-item">
    <h5 class="accordion-header" id="serviceOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#service-collapseOne" aria-expanded="false" aria-controls="service-collapseOne">
        Serivice Item #1
        </button>
    </h5>
    <div id="service-collapseOne" class="accordion-collapse collapse" aria-labelledby="serviceOne" data-bs-parent="#accordionFlushExample1">
      <div class="accordion-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet porro ex atque, ipsam, quisquam eligendi, consectetur fugit perspiciatis quo explicabo aliquid accusantium! At, quisquam? Saepe sit quasi voluptas magnam ipsa.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h5 class="accordion-header" id="serviceTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#service-collapseTwo" aria-expanded="false" aria-controls="service-collapseTwo">
        Service Item #2
      </button>
    </h5>
    <div id="service-collapseTwo" class="accordion-collapse collapse" aria-labelledby="serviceTwo" data-bs-parent="#accordionFlushExample1">
      <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet porro ex atque, ipsam, quisquam eligendi, consectetur fugit perspiciatis quo explicabo aliquid accusantium! At, quisquam? Saepe sit quasi voluptas magnam ipsa.
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h5 class="accordion-header" id="serviceThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#service-collapseThree" aria-expanded="false" aria-controls="service-collapseThree">
        Service Item #3
      </button>
    </h5>
    <div id="service-collapseThree" class="accordion-collapse collapse" aria-labelledby="serviceThree" data-bs-parent="#accordionFlushExample1">
      <div class="accordion-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet porro ex atque, ipsam, quisquam eligendi, consectetur fugit perspiciatis quo explicabo aliquid accusantium! At, quisquam? Saepe sit quasi voluptas magnam ipsa.
    </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
            <!--Footer-->
            <footer class="bg-dark fixed">
                <nav class="navbar">
                    <span>
                        <img class="ps-3" src="assets/images/logo-small.png"/>
                        </span>
                        <span>
                        <ul class="nav px-4">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">HOME</a>
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
                        <img class="ps-3 pe-5" src="assets/images/ic-instagram.png"/>
                    </span>
                </nav>
                <div class="hori-line container pb-1"></div>
                <div class="container text-center pt-2">
                    <span class="text-white">@2018 Helperland All rights reserved</span>
                    <span>&nbsp <a class="text-white" href="#">Terms and Conditions</a> <span class="sep px-1"></span> <a class="text-white" href="#">Privacy Policy</a></span>
                </div>
              </footer>
    </body>
</html>