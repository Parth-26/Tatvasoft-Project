<?php

$base_url='http://localhost/Tatvasoft-Project/Project/Helperland/';

?>
<!Doctype HTML>
<html>
    <head>
        <title>
            FAQs | Helperland
        </title>
        <link type="text/css" rel="stylesheet" href="view/assets/css/about.css">
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
  ?>
  <?php include 'view/login.php';?> 
        <main>
        <section>
                <img class="img-fluid" src="view/assets/images/hero-banner-img.png" alt="Banner Image">
</section>
        
        <!--about content-->
        <section>
            
        <div class="container-xl">
            <div class="text-center">
            <h2 class="pt-4">A Few words about us</h2>
            <span>
                <img class="pe-2" src="view/assets/images/rectangle-5.png"/>
                <img src="view/assets/images/forma-1-copy-5.png"/>
                <img class="ps-2" src="view/assets/images/rectangle-5.png"/>
            </span>
            <div class="pt-4">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie convallis tempor. Duis vestibulum vel risus condimentum dictum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus quis enim orci. Fusce risus lacus, sollicitudin eu magna sed, pharetra sodales libero. Proin tincidunt vel erat id porttitor. Donec tristique est arcu, sed dignissim velit vulputate ultricies. 
                </p>
                <p>
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst. Vivamus eget mauris eget nisl euismod volutpat sed sed libero. Quisque sit amet lectus ex. Ut semper ligula et mauris tincidunt hendrerit. Aenean ut rhoncus orci, vel elementum turpis. Donec tempor aliquet magna eu fringilla. Nam lobortis libero ut odio finibus lobortis. In hac habitasse platea dictumst. Mauris a hendrerit felis. Praesent ac vehicula ipsum, at porta tellus. Sed dolor augue, posuere sed neque eget, aliquam ultricies velit. Sed lacus elit, tincidunt et massa ac, vehicula placerat lorem.
                </p>
            </div>
            </div>
           
            </div>
        </section>
                <!--story content-->
                <section>
                    <div class="container-xl">
                        <div class="text-center">
                        <h2 class="pt-4">Our Story</h2>
                        <span>
                            <img class="pe-2" src="view/assets/images/rectangle-5.png"/>
                            <img src="view/assets/images/forma-1-copy-5.png"/>
                            <img class="ps-2" src="view/assets/images/rectangle-5.png"/>
                        </span>
                        <div class="pt-4">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie convallis tempor. Duis vestibulum vel risus condimentum dictum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus quis enim orci. Fusce risus lacus, sollicitudin eu magna sed, pharetra sodales libero. Proin tincidunt vel erat id porttitor. Donec tristique est arcu, sed dignissim velit vulputate ultricies. 
                            </p>
                            <p>
                                Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst. Vivamus eget mauris eget nisl euismod volutpat sed sed libero. Quisque sit amet lectus ex. Ut semper ligula et mauris tincidunt hendrerit. 
                            </p>
                            <p>
                                Aenean ut rhoncus orci, vel elementum turpis. Donec tempor aliquet magna eu fringilla. Nam lobortis libero ut odio finibus lobortis. In hac habitasse platea dictumst. Mauris a hendrerit felis. Praesent ac vehicula ipsum, at porta tellus. Sed dolor augue, posuere sed neque eget, aliquam ultricies velit. Sed lacus elit, tincidunt et massa ac, vehicula placerat lorem.
                            </p>
                        </div>
                        </div>
                       
                        </div>
                    </section>
                    <!--newsletter-->
            <section>
                <div class="d-flex justify-content-center pt-4 pb-4">
                    <div>
                        <h3>GET OUR NEWSLETTER</h3>
                        <div>
                                <input class="letter-style d-inline" type="text" placeholder="YOUR EMAIL"/>
                                <button class="submit-btn d-inline" type="Submit">Submit</button>
                        </div>
                    </div>
                </div>
            </section>
                <!--newsletter over-->
</main>
            <!--Footer-->
            <footer class="bg-dark">
            <?php
               include('footer.php');
               ?>
              </footer>
        </div>
    </body>
    
</html>
