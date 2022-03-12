<?php
include('controller/config.php');
?>
<!Doctype HTML>
<html>
    <head>
        <title>
            FAQs | Helperland
        </title>
        <link type="text/css" rel="stylesheet" href="view/assets/css/upcoming_service.css">
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
        <section class="container py-4 d-flex justify-content-center">
                <div class="vertical-menu">
                    <!--<a href="#">Dashboard</a>-->
                    <a href="<?= $base_url.'?controller=User&function=sp_new_service'?>">New Service Requests</a>
                    <a href="<?= $base_url.'?controller=User&function=sp_upcoming'?>">Upcoming Services</a>
                    <!--<a href="#">Service Schedule</a>-->
                    <a href="<?= $base_url.'?controller=User&function=Sp_service_history'?>">Service History</a>
                    <a href="<?= $base_url.'?controller=User&function=sp_rating'?>">My Ratings</a>
                    <a href="<?= $base_url.'?controller=User&function=sp_block'?>">Block Customer</a>
                  </div>
                  <p>
                      Upcoming Services
                  </p>
                  <table class="d-inline table table-bordered ps-4 table-responsive-lg">
                        <th>Service ID<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>Service Date <img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>Customer Details<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>Distance<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>Actions</th>
                      <tbody class="align-middle">
                          <?php for($i=0;$i<5;$i++){
                         echo '<tr>
                              <td>
                                  323436
                              </td>
                              <td>
                                  <div>
                                  <img src="view/assets/images/calendar2.png">
                                  <h6 class="d-inline">09/04/2018</h6>
                                </div>
                                <div>
                                  <img src="view/assets/images/layer-14.png">
                                  <h6 class="d-inline fw-normal">12:00 - 18:00</h6>
                                </div>
                              </td>
                              <td>
                                  <h6 class="fw-normal">David Bough</h6>
                                  <h6 class="fw-normal"><img src="view/assets/images/layer-15.png">Musterstrabe 5,12345 Bonn</h6>
                              </td>
                              <td>
                                  <h6 class="fw-normal">
                                      15 km
                                  </h6>
                              </td>
                              <td>
                                  <button class="submit-btn text-white">Cancel</button>
                              </td>
                          </tr>';
                          };
                          ?>
                      </tbody>
                  </table>
        </section>
        <!--Dashboard over-->
            <!--Footer-->
            <?php include('view/footer.php'); ?>
        </div>
    </body>
</html>