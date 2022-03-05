<?php

$base_url='http://localhost/Tatvasoft-Project/Project/Helperland/';
$message="";
if(isset($_GET['msg'])){
  $message = $_GET['msg'];
}

?>
<!Doctype HTML>
<html>
    <head>
        <title>
            Contact Us | Helperland
        </title>
        <link type="text/css" rel="stylesheet" href="view/assets/css/contact.css">
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
include('view/login.php');
  ?>
        <main>
              <setion>
                  <img class="img-fluid" src="view/assets/images/group-16_2.png" alt="Worker Image">
              </section>
            <div class="container">
            <!--contact us-->
            <section>
            <div class="container">
                <div class="text-center">
                    <h2 class="pt-4">Contact Us</h2>
                    <span>
                        <img class="pe-2" src="view/assets/images/rectangle-5.png"/>
                        <img src="view/assets/images/forma-1-copy-5.png"/>
                        <img class="ps-2" src="view/assets/images/rectangle-5.png"/>
                    </span>
                </div>
                <section>
                <div class="row justify-content-center pt-3">
                    <div class="col-lg-4 text-center">
                        <img class="img-fluid" src="view/assets/images/forma-1_2.png"/>
                        <div class="pt-3">
                        <p>1111 Lorem ipsum text 100, </p>
                        <p>Lorem ipsum AB</p>
                    </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img class="img-fluid" src="./view/assets/images/phone-call.png"/>
                        <div class="pt-3">
                        <p>+49 (40) 123 56 7890</p>
                        <p>+49 (40) 987 56 0000</p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img class="img-fluid" src="view/assets/images/vector-smart-object.png"/>
                        <p class="pt-3">info@helperland.com</p>
                    </div>
                </div>
                </section>
            </div>
        </section>
            <!--contact us over-->
            <div class="hori-line container pt-4"></div>
            <!--get in touch-->
        <section class="jumbo-section inner-page-section contact-us-form pt-4">
            <div class="container">
              <h2 class="text-center">Get in touch with us</h2>
              <div class="text-center">
                <h6><?= $message ?></h6>
              </div>
              <!---->
              <form method="post" action="<?= $base_url.'?controller=User&function=contact_data'?>" class="ng-untouched ng-pristine ng-invalid">
        
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="FirstName" maxlength="25" name="fname" type="text" placeholder="First name" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="LastName" maxlength="25" name="lname" type="text" placeholder="Last name" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-text">+49</span>
                        <input class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="PhoneNumber" maxlength="10" name="PhoneNumber" type="text" placeholder="Mobile number" required>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="Email" maxlength="100" name="email" type="Email" placeholder="Email address" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <select class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="SubjectTypeId" name="sub_type">
                        <option value="1">
                          General</option>
                          <option value="2">
                          Inquiry</option>
                          <option value="3">
                          Renewal</option>
                          <option value="4">
                          Revocation</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="Message" maxlength="1000" rows="5" placeholder="Message" name="message" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 text-center pt-4">
                  <button class="btn btn-primary btn-lg" data-dismiss="msg" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </section>
            </div>
            <!--get in touch over-->
            <!--Map-->
            <section class="pt-5">
                <img class="img-fluid" src="view/assets/images/group-16.png"/>
            </section>
            <!--Map over-->
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
</body>
</html>