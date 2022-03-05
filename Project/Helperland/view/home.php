<?php
$base_url='http://localhost/Tatvasoft-Project/Project/Helperland/';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Homepage|HelperHand
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="view/assets/css/homepage.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
   <body id="top" class="homepage_bg" style="background-image: url('./view/assets/images/Landing-Page-background-image.png')">
      <!--navbar-->
      
  <?php 
  if($_SESSION['loggedin'] == 1)
  {
    include('view/header2.php'); 
  }
  else
  {
  include('view/headerhome.php'); 
  }
  ?>
<section>
            <div class="text-white p-5">
            <p class="fs-1">Lorem ipsum text</p>
            <div><img class="d-inline p-2" src="view/assets/images/ic-check.png"/><p class="d-inline p-2">Lorem ipsum dolor sit amet, consectetur adipisicing</p></div>
            <div><img class="d-inline p-2" src="view/assets/images/ic-check.png"/><p class="d-inline p-2">Lorem ipsum dolor sit amet, consectetur adipisicing</p></div>
            <div><img class="d-inline p-2" src="view/assets/images/ic-check.png"/><p class="d-inline p-2">Lorem ipsum dolor sit amet, consectetur adipisicing</p></div>
            </div>
            <div class="center-btn d-flex justify-content-center"> 
            <button class="lets-book">Let's Book a Cleaner</button>
            </div>
            <div class="d-flex text-white justify-content-center text-center py-4">
                <div class="row">
                <span class="col-lg">
                    <img src="view/assets/images/step-1.png"/>
                    <p class="text-center">Enter your postcode</p>
                </span>
                <span class="col-lg">
                <img src="view/assets/images/step-arrow-1.png"/>'</span>
                <span class="col-lg">
                <img  src="view/assets/images/step-2.png"/>
                <p class="text-center">Select your plan</p>
                </span>
                <span class="col-lg">
                    <img src="view/assets/images/step-arrow-1-copy.png"/></span>
                <span class="col-lg">
                <img src="view/assets/images/step-3.png"/>
                <p class="text-center">Pay securely online</p>
                </span>
                <span class="col-lg">
                    <img src="view/assets/images/step-arrow-1.png"/></span>
                <span class="col-lg">
                <img src="view/assets/images/step-4.png"/>
                <p class="text-center">Enjoy amazing service</p>
                </span>
            </div>
            </div>
            <div class="d-flex justify-content-center py-4">
              <a href="#why">
            <img class="justify-content-center" src="view/assets/images/group-18_5.png"/></a>
        </div>
    </section>
        <!--Why Helperland-->
        <section class="bg-white text-color" id="why">
            <p class="fs-2 fw-bold text-center py-4">Why Helperland</p>
            <div class="d-flex">
            <div class="container gap-2 py-4 justify-content-center">
                <div class="row justify-content-evenly">
                    <div class="col-lg-3">
                        <img src="view/assets/images/helper-img.png"/>
                        <p class="fs-4 fw-bold">Experience and Vetted Professionals</p>
                        <p class="fs-6">dominate the industry in scale and scope with an adaptable, extensive network that consistently delivers exceptional results.</p>  
                    </div>
                    <div class="col-lg-3">
                        <img src="view/assets/images/group-23.png"/>
                        <p class="fs-4 fw-bold">Secure Online Payment</p>
                        <p class="fs-6">Payment is processed securely online.Customers pay safely online nd manage the bookings.</p>
                    </div>
                    <div class="col-lg-3">
                        <img src="view/assets/images/group-24.png"/>
                        <p class="fs-4 fw-bold">Dedicated Customer Service</p>
                        <p class="fs-6">to our customers and are guided in all we do by their needs. The team is always happy to support you and offer all the information.</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="bg-white">
            <div class="d-flex">
                <img class="justify-content-left d-inline" src="view/assets/images/blog-left-bg.png"/>
                <div class="d-inline">
                    <div class="row  justify-content-center">
                        <div class="col-lg-6">
                            <p class="fs-2 fw-bold">
                                Lorem ipsum dolor sit amet, consectetur
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi sapien, suscipit ut accumsan vitae, pulvinar ac libero. 
                            </p>
                            <p>
                                Aliquam erat volutpat. Nullam quis ex odio. Nam bibendum cursus purus, vel efficitur urna finibus vitae. Nullam finibus aliquet pharetra. Morbi in sem dolor. Integer pretium hendrerit ante quis vehicula.
                            </p>
                            <p>
                                 Mauris consequat ornare enim, sed lobortis quam ultrices sed.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <img src="view/assets/images/group-36.png"/>
                        </div>
                    </div>

                    <!--Our Blog-->
                    <div>
                        <p class="fs-3 fw-bold text-center py-4">Our Blog</p>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                              <div class="card">
                                <img src="view/assets/images/group-28.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                                  <h6 class="blog-date-color">January 28,2019</h6>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet.</p>
                                  <span>
                                      <h5 class="read-color d-inline">Read the Post</h5>&nbsp;
                                      <img src="view/assets/images/shape-2-copy-3.png"/>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="view/assets/images/group-29.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                                  <h6 class="blog-date-color">January 28,2019</h6>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet.</p>
                                  <span>
                                    <h5 class="read-color d-inline">Read the Post</h5>&nbsp;
                                    <img src="view/assets/images/shape-2-copy-3.png"/>
                                </span>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="view/assets/images/group-30.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                                  <h6 class="blog-date-color">January 28,2019</h6>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet.</p>
                                  <span>
                                    <h5 class="read-color d-inline">Read the Post</h5>&nbsp;
                                    <img src="view/assets/images/shape-2-copy-3.png"/>
                                </span>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <img class="justify-content-right d-inline"src="view/assets/images/blog-right-bg.png"/>
            </div>
        </section>
            <!--Customer review-->
            <section>
            <div class="cust-review">
                <h3 class="text-center py-4">What Our Custmer Say</h3>
                <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card">
                        <img class="message-icon m-3" src="view/assets/images/message.png"/>
                        <div class="d-flex ms-5">
                        <img src="view/assets/images/group-31.png" class="cust-img d-inline" alt="...">
                        <span class="d-inline ps-2">   
                        <h5 class="card-title">Lary Watson</h5>
                          <h6 class="blog-date-color">Manchester</h6>
                        </span>    
                    </div>
                        <div class="card-body ms-4">
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet consequat. Praesent nec malesuada nibh.</p>
                          <p>Nullam et metus congue, auctor augue sit amet, consectetur tortor.</p>
                          <span>
                              <h5 class="read-color d-inline">Read the Post</h5>&nbsp;
                              <img src="view/assets/images/shape-2-copy-3.png"/>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img class="message-icon m-3" src="view/assets/images/message.png"/>
                        <div class="d-flex ms-5">
                            <img src="view/assets/images/group-32.png" class="cust-img d-inline" alt="...">
                            <span class="d-inline ms-2"> 
                                <h5 class="card-title">John Smith</h5>
                                <h6 class="blog-date-color">Manchester</h6>
                            </span>    
                        </div>
                        <div class="card-body ms-4">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet consequat. Praesent nec malesuada nibh.</p>
                            <p>Nullam et metus congue, auctor augue sit amet, consectetur tortor.</p>
                          <span>
                            <h5 class="read-color d-inline">Read the Post</h5>&nbsp;
                            <img src="view/assets/images/shape-2-copy-3.png"/>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img class="message-icon m-3" src="view/assets/images/message.png"/>
                          <div class="d-flex ms-5">
                        <img src="view/assets/images/group-33.png" class="cust-img d-inline" alt="...">
                        <span class="d-inline ms-2">
                             <h5 class="card-title">Lars Johnson</h5>
                          <h6 class="blog-date-color">Manchester</h6>
                        </span>    
                    </div>
                        <div class="card-body ms-4">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet consequat. Praesent nec malesuada nibh.</p>
                            <p>Nullam et metus congue, auctor augue sit amet, consectetur tortor.</p>
                          <span>
                            <h5 class="read-color d-inline">Read the Post</h5>&nbsp;
                            <img src="view/assets/images/shape-2-copy-3.png"/>
                        </span>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <!--Newsletter-->
            <div>
            <div class="row row-cols-4 pb-5">
            <div class="col ms-5 pt-5">
                <a href="#top"><button class="up-btn">
                <img src="view/assets/images/forma-1.png"/>
                </button></a>
            </div>
            <div class="col-4 pt-5">
                <h3>GET OUR NEWSLETTER</h3>
                <div>
                    <form class="pt-2">
                        <input class="letter-style" type="text" placeholder="YOUR EMAIL"/>
                        <button class="submit-btn" type="Submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col pt-5 ms-xxl-5">
                <img src="view/assets/images/layer-598.png"/>
            </div>
        </div>
    </div>
        </div>
    </section>
        <!--Footer-->
        
          <?php
          include('footer.php');
          ?>
       
    </body>
</html>