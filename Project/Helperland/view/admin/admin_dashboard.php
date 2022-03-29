<?php
include 'controller/config.php';
?>
<!Doctype HTML>
<html>
    <head>
        <title>
            Admin | Helperland
        </title>
        <link type="text/css" rel="stylesheet" href="view/assets/css/admin_service_request.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <!--Navbar-->
        <?php
        include 'admin_header.php';
        ?>
        <!--Dashboard-->
        <section class="d-flex">
                <div class="vertical-menu">
                    <a href="<?= $base_url.'?controller=User&function=admin_dashboard&parameter=srequest'?>" id="srequest">Service Management</a>
                    <a href="<?= $base_url.'?controller=User&function=admin_dashboard&parameter=usrequest'?>" id="usrequest">User Management</a>
                    <div class="accordion">
                       <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Coupon Management
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <a href="#">Coupon Code</a>
                              <a href="#">Usage History</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <a href="#">Escalation Management</a>
                    <a href="#">Service Requests</a>
                    <a href="#">Service Providers</a>
                    <a href="#">User Management</a>
                    <div class="accordion">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Finance Module
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <a href="#">All Transactions</a>
                            <a href="#">Generate Payment</a>
                            <a href="#">Customer Invoices</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="#">Zip Code Management</a>
                    <a href="#">Rating Management</a>
                    <a href="#">Inquiry Management</a>
                    <a href="#">Newsletter Management</a>
                    <div class="accordion">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Content Management
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <a href="#">Blog</a>
                            <a href="#">FAQs</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 <?php
                 if(isset($_GET['parameter'])){
                    $parameter = $_GET['parameter'];
                    switch ($parameter) {
                        case "srequest":
                            include('view/admin/service_request.php');
                            break;
                        case "usrequest":
                            include('view/admin/user_management.php');
                            break;
                        default:
                            include('view/admin/service_request.php');
                      }
                }else{
                    include('view/admin/service_request.php');
                }?>
        </section>
        <!--Dashboard over-->
    </body>
</html>