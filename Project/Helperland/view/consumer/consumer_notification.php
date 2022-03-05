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
                  <div>
                      <div class="d-flex">
                      <h3 class="ps-4 d-inline">Notifications</h3>
                      <button class="book-btn d-inline ms-auto">Export</button>
                    </div>
                  <table class="d-block table table-bordered ps-4 table-responsive-lg w-auto">
                        <th>Service Details<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>Service Provider<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>Payment<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>Status<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>Rate SP</th>
                      <tbody class="align-middle">
                          <tr>
                              <td>
                                <div>
                                    <img src="view/assets/images/calendar.png">
                                    <h6 class="d-inline">09/04/2018</h6>
                                  </div>
                                  <div>
                                    <h6 class="fw-normal">12:00 - 18:00</h6>
                                  </div>
                              </td>
                              <td>
                                  <span>
                                  <img class="mx-2" src="view/assets/images/cap.png">Lyum Watson</img>
                                </span>
                                  <div class="mx-2">
                                    <img src="view/assets/images/star1.png"/>
                                    <img src="view/assets/images/star1.png"/>
                                    <img src="view/assets/images/star1.png"/>
                                    <img src="view/assets/images/star1.png"/>
                                    <img src="view/assets/images/star2.png"/>
                                    <h6 class="d-inline fw-normal">4</h6>
                                  </div>
                              </td>
                              <td>
                                  <h4 class="fw-normal">&euro;63</h4>
                              </td>
                              <td>
                                  <h6 class="bg-green text-white fw-normal">
                                      Completed 
                                  </h6>
                              </td>
                              <td>
                                  <button class="rate-btn text-white">Rate SP</button>
                              </td>
                          </tr>
                          <tr>
                            <td>
                              <div>
                                  <img src="view/assets/images/calendar.png">
                                  <h6 class="d-inline">09/04/2018</h6>
                                </div>
                                <div>
                                  <h6 class="fw-normal">12:00 - 18:00</h6>
                                </div>
                            </td>
                            <td>
                                <span>
                                <img class="mx-2" src="view/assets/images/cap.png">Lyum Watson</img>
                              </span>
                                <div class="mx-2">
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star2.png"/>
                                  <h6 class="d-inline fw-normal">4</h6>
                                </div>
                            </td>
                            <td>
                                <h4 class="fw-normal">&euro;63</h4>
                            </td>
                            <td>
                                <h6 class="bg-green text-white fw-normal">
                                    Completed 
                                </h6>
                            </td>
                            <td>
                                <button class="rate-btn text-white">Rate SP</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div>
                                  <img src="view/assets/images/calendar.png">
                                  <h6 class="d-inline">09/04/2018</h6>
                                </div>
                                <div>
                                  <h6 class="fw-normal">12:00 - 18:00</h6>
                                </div>
                            </td>
                            <td>
                                <span>
                                <img class="mx-2" src="view/assets/images/cap.png">Lyum Watson</img>
                              </span>
                                <div class="mx-2">
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star2.png"/>
                                  <h6 class="d-inline fw-normal">4</h6>
                                </div>
                            </td>
                            <td>
                                <h4 class="fw-normal">&euro;63</h4>
                            </td>
                            <td>
                                <h6 class="bg-green text-white fw-normal">
                                    Completed 
                                </h6>
                            </td>
                            <td>
                                <button class="rate-btn text-white">Rate SP</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div>
                                  <img src="view/assets/images/calendar.png">
                                  <h6 class="d-inline">09/04/2018</h6>
                                </div>
                                <div>
                                  <h6 class="fw-normal">12:00 - 18:00</h6>
                                </div>
                            </td>
                            <td>
                                <span>
                                <img class="mx-2" src="view/assets/images/cap.png">Lyum Watson</img>
                              </span>
                                <div class="mx-2">
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star2.png"/>
                                  <h6 class="d-inline fw-normal">4</h6>
                                </div>
                            </td>
                            <td>
                                <h4 class="fw-normal">&euro;63</h4>
                            </td>
                            <td>
                                <h6 class="bg-red text-white fw-normal">
                                    Canceled 
                                </h6>
                            </td>
                            <td>
                                <button class="rate-btn text-white">Rate SP</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div>
                                  <img src="view/assets/images/calendar.png">
                                  <h6 class="d-inline">09/04/2018</h6>
                                </div>
                                <div>
                                  <h6 class="fw-normal">12:00 - 18:00</h6>
                                </div>
                            </td>
                            <td>
                                <span>
                                <img class="mx-2" src="view/assets/images/cap.png">Lyum Watson</img>
                              </span>
                                <div class="mx-2">
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star2.png"/>
                                  <h6 class="d-inline fw-normal">4</h6>
                                </div>
                            </td>
                            <td>
                                <h4 class="fw-normal">&euro;63</h4>
                            </td>
                            <td>
                                <h6 class="bg-green text-white fw-normal">
                                    Completed 
                                </h6>
                            </td>
                            <td>
                                <button class="rate-btn text-white">Rate SP</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div>
                                  <img src="view/assets/images/calendar.png">
                                  <h6 class="d-inline">09/04/2018</h6>
                                </div>
                                <div>
                                  <h6 class="fw-normal">12:00 - 18:00</h6>
                                </div>
                            </td>
                            <td>
                                <span>
                                <img class="mx-2" src="view/assets/images/cap.png">Lyum Watson</img>
                              </span>
                                <div class="mx-2">
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star2.png"/>
                                  <h6 class="d-inline fw-normal">4</h6>
                                </div>
                            </td>
                            <td>
                                <h4 class="fw-normal">&euro;63</h4>
                            </td>
                            <td>
                                <h6 class="bg-red text-white fw-normal">
                                    Canceled 
                                </h6>
                            </td>
                            <td>
                                <button class="rate-btn text-white">Rate SP</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div>
                                  <img src="view/assets/images/calendar.png">
                                  <h6 class="d-inline">09/04/2018</h6>
                                </div>
                                <div>
                                  <h6 class="fw-normal">12:00 - 18:00</h6>
                                </div>
                            </td>
                            <td>
                                <span>
                                <img class="mx-2" src="view/assets/images/cap.png">Lyum Watson</img>
                              </span>
                                <div class="mx-2">
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star2.png"/>
                                  <h6 class="d-inline fw-normal">4</h6>
                                </div>
                            </td>
                            <td>
                                <h4 class="fw-normal">&euro;63</h4>
                            </td>
                            <td>
                                <h6 class="bg-green text-white fw-normal">
                                    Completed 
                                </h6>
                            </td>
                            <td>
                                <button class="rate-btn text-white">Rate SP</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div>
                                  <img src="view/assets/images/calendar.png">
                                  <h6 class="d-inline">09/04/2018</h6>
                                </div>
                                <div>
                                  <h6 class="fw-normal">12:00 - 18:00</h6>
                                </div>
                            </td>
                            <td>
                                <span>
                                <img class="mx-2" src="view/assets/images/cap.png">Lyum Watson</img>
                              </span>
                                <div class="mx-2">
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star2.png"/>
                                  <h6 class="d-inline fw-normal">4</h6>
                                </div>
                            </td>
                            <td>
                                <h4 class="fw-normal">&euro;63</h4>
                            </td>
                            <td>
                                <h6 class="bg-green text-white fw-normal">
                                    Completed 
                                </h6>
                            </td>
                            <td>
                                <button class="rate-btn text-white">Rate SP</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div>
                                  <img src="view/assets/images/calendar.png">
                                  <h6 class="d-inline">09/04/2018</h6>
                                </div>
                                <div>
                                  <h6 class="fw-normal">12:00 - 18:00</h6>
                                </div>
                            </td>
                            <td>
                                <span>
                                <img class="mx-2" src="view/assets/images/cap.png">Lyum Watson</img>
                              </span>
                                <div class="mx-2">
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star2.png"/>
                                  <h6 class="d-inline fw-normal">4</h6>
                                </div>
                            </td>
                            <td>
                                <h4 class="fw-normal">&euro;63</h4>
                            </td>
                            <td>
                                <h6 class="bg-red text-white fw-normal">
                                    Canceled 
                                </h6>
                            </td>
                            <td>
                                <button class="rate-btn text-white">Rate SP</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div>
                                  <img src="view/assets/images/calendar.png">
                                  <h6 class="d-inline">09/04/2018</h6>
                                </div>
                                <div>
                                  <h6 class="fw-normal">12:00 - 18:00</h6>
                                </div>
                            </td>
                            <td>
                                <span>
                                <img class="mx-2" src="view/assets/images/cap.png">Lyum Watson</img>
                              </span>
                                <div class="mx-2">
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star1.png"/>
                                  <img src="view/assets/images/star2.png"/>
                                  <h6 class="d-inline fw-normal">4</h6>
                                </div>
                            </td>
                            <td>
                                <h4 class="fw-normal">&euro;63</h4>
                            </td>
                            <td>
                                <h6 class="bg-red text-white fw-normal">
                                    Canceled 
                                </h6>
                            </td>
                            <td>
                                <button class="rate-btn text-white">Rate SP</button>
                            </td>
                        </tr>
                      </tbody>
                  </table>
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