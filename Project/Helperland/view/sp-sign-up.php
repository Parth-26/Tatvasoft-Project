<!DOCTYPE html>
<html>
    <head>
        <title>
            Homepage|HelperHand
        </title>
        <link type="text/css" rel="stylesheet" href="view/assets/css/service_provider.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </head>
    <body>
      <!--navbar-->
<?php
include('header.php');
?>
<main>
          <section id="sp-sign-up" class="jumbo-section inner-page-section contact-us-form py-4 d-flex justify-content-center" style="background-image: url('view/assets/images/become-a-pro-banner.png');"">
          <div class="card py-4 px-4">
            <div class="container">
              <h2 class="text-center">Register Now!</h2>
              <form method='post' action="<?= $base_url.'?controller=User&function=sp_sign_data'?>" novalidate="" class="ng-untouched ng-pristine ng-invalid">
                    <div class="form-group my-2">
                        <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="FirstName" maxlength="25" name="FirstName" type="text" placeholder="First name">
                    </div>
                  <div class="form-group my-2">
                      <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="LastName" maxlength="25" name="LastName" type="text" placeholder="Last name">
                  </div>
                <div class="row my-2">   
                    <div class="form-group">
                      <div class="input-group">
                        <span class="rounded border border-1 p-1">+ 46</span>
                        <input class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="PhoneNumber" maxlength="20" name="PhoneNumber" type="tel" placeholder="Mobile number">
                      </div>
                    </div>
                </div>
                <div class="form-group my-2">
                      <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="Email" maxlength="100" name="email" type="email" placeholder="Email address">
                </div>
                    <div class="form-group my-2">
                        <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="pass" maxlength="100" name="passwd" type="password" placeholder="Password">
                    </div>

                    <div class="form-group my-2">
                        <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="confirmpass" maxlength="100" name="confirmpasswd" type="password" placeholder="Confirm Password">
                    </div>
                    <div class="form-group my-2">
                        <input formcontrolname="chkletter"  type="checkbox" value="Send me newsletters from Helperland"> <h6 class="d-inline">Send me newsletters from Helperland</h6></input>
                    </div>
                    <div class="form-group my-2">
                        <input formcontrolname="chkletter"  type="checkbox" value="Send me newsletters from Helperland"> <h6 class="d-inline">I accept terms and conditions & privacy policy</h6></input>
                    </div>
                <div class="text-center">
                  <button class="text-white book-btn1" data-dismiss="msg" type="submit">Get Started <img src="view/assets/images/arrow-white.png"></button>
                </div>
              </form>
            </div>
          </section>   
          <section class="text-center pt-3 pb-5">
              <img class="img-fluid" src="view/assets/images/group-18_5.png">
        </section>
        <?php
include "login.php";
?>
        <!--How it works-->
        <section>
            <div class="row d-flex w-auto bg-white py-2">
                    <img class="col col-sm-2 img-fluid" src="view/assets/images/blog-left-bg.png">
                <div class="col col-xl">
                    <h2 class="text-center">How it works</h2>
                    <div class="row d-flex py-5">
                        <div class="col col-lg-6">
                            <h3>Register yourself</h3>
                            <p>Provide your basic information to register yourself as a service provider.</p>
                        </div>
                        <div class="col col-lg-6">
                            <div class="image-cropper">
                                <img class="profile-pic" src="view/assets/images/group-28.png">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex py-5">
                        <div class="col col-lg-6">
                            <div class="image-cropper">
                                <img class="profile-pic" src="view/assets/images/group-29.png">
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <h3>Get service requests</h3>
                            <p>You will get service requests from customes depend on service area and profile.</p>
                            
                        </div>
                    </div>
                    <div class="row d-flex py-5">
                        <div class="col col-lg-6">
                            <h3>Complete service</h3>
                            <p>Accept service requests from your customers and complete your work.</p>
                            
                        </div>
                        <div class="col col-lg-6">
                            <div class="image-cropper">
                            <img class="profile-pic" src="view/assets/images/group-30.png">
                        </div>
                        </div>
                    </div>
                    <!--Newsletter-->
                    <div class="d-flex justify-content-center py-5">
                        <div>
                            <h3>GET OUR NEWSLETTER</h3>
                            <div>
                                    <input class="letter-style d-inline" type="text" placeholder="YOUR EMAIL"/>
                                    <button class="submit-btn d-inline" type="Submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-2 d-flex justify-content-end position-relative">
                    <img class="img-fluid" src="view/assets/images/blog-right-bg.png">
                </div>
            </div>
        </section>
</main>
        <!--How it works over-->
        <!--Footer-->
        <footer class="bg-dark pb-2">
            <?php
            include('footer.php');
            ?>
          </footer>
    </body>
</html>