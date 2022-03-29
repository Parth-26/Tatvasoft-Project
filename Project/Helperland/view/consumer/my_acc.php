<?php
include('controller/config.php');
if(isset($_SESSION['userid']))
{
    $user=$_SESSION['userid'];
}
else{
    $user="Sandip";
}
?>
<!Doctype HTML>
<html>
    <head>
        <title>
            FAQs | Helperland
        </title>
        <link type="text/css" rel="stylesheet" href="view/assets/css/customer_service_history.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <!--Navbar-->
        <?php include('view/header2.php');?>

        <!--welcome-->
        <section class="text-center py-4 border">
            <h1 class="fw-normal d-inline mt-3">Welcome,</h1><h1 class="d-inline"><?php echo $_SESSION['name'];?>!</h1>
        </section>
        <!--welcome over-->
        <!--Dashboard-->
        <section class="py-4 d-flex justify-content-center">
                <div class="vertical-menu">
                <a href="<?= $base_url.'?controller=User&function=consumer_dashboard'?>">Dashboard</a>
                    <a href="<?= $base_url.'?controller=User&function=consumer_service_history'?>">Service History</a>
                    <!--<a href="#">Service Schedule</a>-->
                    <a href="<?= $base_url.'?controller=User&function=consumer_fav_pro'?>">Favourite Pros</a>
                    <a href="<?= $base_url.'?controller=User&function=consumer_invoice'?>">Invoices</a>
                    <a href="<?= $base_url.'?controller=User&function=consumer_notification'?>">Notifications</a>
                  </div>
                  <div class="ms-4">
                      <div class="d-flex">
                      <h3 class="ps-4 d-inline">My Details</h3>
                      <button class="book-btn d-inline ms-auto">Export</button>
                    </div>
                    <div class="sidebar-content">
    <div class="" id="ups">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active px-5" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true">My Details</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link px-5" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false">My Addresses</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link px-5" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false">Change Password</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active p-4" id="details" role="tabpanel" aria-labelledby="details-tab">
                <form action="#" id="setting-details-form">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-7 pb-3">
                            <label for="firstname">First name</label>
                            <input class="form-control" id="sfname" name="firstname" value="<?= $_SESSION['userdata']["FirstName"]?>" placeholder="First name" type="text" required autofocus />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-7 pb-3">
                            <label for="lastname">Last name</label>
                            <input class="form-control" id="slname" name="lastname" value="<?= $_SESSION['userdata']["LastName"]?>" placeholder="Last name" type="text" required />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-7 pb-3">
                            <label for="email">E-mail Address</label>
                            <input class="form-control" id="semail" name="email" value="<?= $_SESSION['userdata']["Email"]?>" placeholder="demo@gmail.com" type="email" disabled />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-7 pb-3">
                            <label for="mobile">Mobile number</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+49</div>
                                </div>
                                <input type="number" name="mobile" value="<?= $_SESSION['userdata']["Mobile"]?>" class="form-control" id="cphone" placeholder="Mobile number">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-7 dateofbirth pb-3">
                            <label for="dateofbirth">Date of Birth</label>
                            <input class="form-control" type="date" name="dob" id="dob" value="<?php 
                                    if(!is_null($userdata["DateOfBirth"])){
                                        echo date('Y-m-d',strtotime($userdata["DateOfBirth"]));
                                    }
                                ?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="language">
                        <label for="language" class="mb-1">My Preferred Language</label>
                        <select name="language" id="language">
                            <option value="english">English</option>
                            <option value="hindi">Hindi</option>
                        </select>
                    </div>
                    <div class="save-btn mt-3">
                        <a href="#" class="save" onClick="showLoader()" id="save-sdetails">Save</a>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade p-4" id="address" role="tabpanel" aria-labelledby="address-tab">
                <table class="table3">
                    
                </table>
                <div class="save-btn mt-3">
                    <a href="#" class="save" id="add-new-address" data-bs-toggle="modal" data-bs-target="#addeditaddress" data-bs-dismiss="modal">Add New Address</a>
                </div>
            </div>
            <div class="tab-pane fade p-4" id="password" role="tabpanel" aria-labelledby="password-tab">
                <form action="#">
                    <div class="col-lg-4 col-md-4 col-sm-7 pb-3">
                        <label for="oldpsw">Old Password</label>
                        <input class="form-control" name="oldpsw" id="soldpsw" placeholder="Current Password" type="password" required autocomplete/>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-7 pb-3">
                        <label for="newpsw">New Password</label>
                        <input class="form-control" name="newpsw" id="snewpsw" placeholder="Password" type="password" required autocomplete/>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-7 pb-3">
                        <label for="cpsw">Confirm Password</label>
                        <input class="form-control" name="cpsw" id="scpsw" placeholder="Confirm Password" type="password" required autocomplete/>
                    </div>
                    <div class="save-btn my-3">
                        <a href="#" class="save" onClick="showLoader()" id="change-psw">Save</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                  <div class="d-flex">
                      <p class="d-inline">Show <span class="border m-2"> 10<img class="m-2" src="view/assets/images/keyboard-right-arrow-button.png"></span>entries Total records:55</p>
                      <p class="ms-auto">
                        <span class="circle-btn">
                            <img src="view/assets/images/first-page.png"/>
                        </span>
                        <span class="circle-btn">
                            <img src="view/assets/images/keyboard-right-arrow-button-copy.png"/>
                        </span>
                        <span class="circle-btn">
                            1
                        </span>
                        <span class="circle-btn">
                            2
                        </span>
                        <span class="circle-btn">
                            3
                        </span>
                        <span class="circle-btn">
                            4
                        </span>
                        <span class="circle-btn">
                            <img class="rotate-img" src="view/assets/images/first-page.png"/>
                        </span>
                        <span class="circle-btn">
                            <img class="rotate-img" src="view/assets/images/keyboard-right-arrow-button-copy.png"/>
                        </span>
                      </p>
                  </div>
                </div>
        </section>
        <!--Dashboard over-->
            <!--Footer-->
            <?php
          include('footer.php');
          ?>
       
        </div>
    </body>
</html>