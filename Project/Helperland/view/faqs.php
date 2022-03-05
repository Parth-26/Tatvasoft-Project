<?php

$base_url='http://localhost/Tatvasoft-Project/Project/Helperland/';

?>
<!Doctype HTML>
<html>
    <head>
        <title>
            FAQs | Helperland
        </title>
        <link type="text/css" rel="stylesheet" href="view/assets/css/faqs.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--Navbar-->
        <?php 
  if($_SESSION['loggedin'] == 1)
  {
    include('view/header2.php'); 
  }
  else{
  include('view/header.php'); 
}
include('view/login.php')
  ?>

        <main>
            <!--header image-->
            <section>
                <img class="img-fluid" src="view/assets/images/faq-banner.png" alt="Banner Image">
</section>
        <!--FAQ content-->
        <div class="container-xl">
            <div class="text-center">
            <h2 class="pt-4">FAQs</h2>
            <span>
                <img class="pe-2" src="view/assets/images/rectangle-5.png"/>
                <img src="view/assets/images/forma-1-copy-5.png"/>
                <img class="ps-2" src="view/assets/images/rectangle-5.png"/>

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
  <div class="tab-pane fade show active" id="custfaq" role="tabpanel" aria-labelledby="cust">
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
</div>
</main>
            <!--Footer-->
            
               <?php
               include('footer.php');
               ?>
    </body>
</html>