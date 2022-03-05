<html>
    <head>
        <title>
            Contact Us | Helperland
        </title>
        <link type="text/css" rel="stylesheet" href="view/assets/css/faqs.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <?php
            include('header.php');
            include('view/login.php');
            ?>
            
</header>
        <section>
            <div class="text-center">
            <h1>Create Account</h1>
            <span>
                <img class="pe-2" src="view/assets/images/rectangle-5.png"/>
                <img src="view/assets/images/forma-1-copy-5.png"/>
                <img class="ps-2" src="view/assets/images/rectangle-5.png"/>

            </span>
        </div>
        <div class="container-md pt-4">
        <form method='post' action="<?= $base_url.'?controller=User&function=create_acc_data'?>" novalidate="" class="ng-untouched ng-pristine ng-invalid">
        
            <div class="row py-2">
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="FirstName" maxlength="25" name="fname" type="text" placeholder="First name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="LastName" maxlength="25" name="lname" type="text" placeholder="Last name">
                </div>
              </div>
            </div>
            <div class="row py-2">
                <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="Email" maxlength="100" name="email" type="text" placeholder="Email address">
                    </div>
                  </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-text">+49</span>
                    <input class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="PhoneNumber" maxlength="10" name="PhoneNumber" type="text" placeholder="Mobile number">
                  </div>
                </div>
              </div>
    
              
            </div>
            <div class="row py-2">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="passwd" maxlength="25" name="passwd" type="password" placeholder="Password">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="confirm_passwd" maxlength="25" name="confirm_passwd" type="password" placeholder="Confirm Password">
                  </div>
                </div>
              </div>
              <div>
                  <input type="checkbox" id="newsletter">
                      Yes, I have read terms and conditions & privacy Policy. I agree to all of them.
                </input>
              </div>
            <div class="col-sm-12 text-center">
              <button class="btn btn-primary btn-lg" data-dismiss="msg" type="submit">Submit</button>
            </div>
          </form>
        </div>
    </section>
    <footer class='bg-dark'>
        <?php
        include('view/footer.php');
        ?>
</footer>
        </body>
<?php
include "login.php";
?>
        </html>