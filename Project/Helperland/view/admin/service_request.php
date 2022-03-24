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
                    <a href="<?= $base_url.'?controller=User&function=service_request'?>">Service Management</a>
                    <a href="<?= $base_url.'?controller=User&function=user_management'?>">User Management</a>
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
                  <div class="w-100 pe-4">
                      <div class="d-flex">
                      <h3 class="ps-4 d-inline">Service Requests</h3>
                      <button class="sample-btn d-inline ms-auto"><img class="me-1" src="view/assets/images/add.png"/>Add new user</button>
                    </div>
                    <div class="ps-4">
                      <table>
                        <tr>
                          <td> <input class="form-control" type="text" placeholder="Customer ID"/></td>
                          <td>
                            <select class="form-select">
                            <option selected>Customer</option>
                            <option></option>
                            <option></option>
                          </select>
                        </td>
                          <td>
                            <select class="form-select">
                              <option selected>Service Provider</option>
                              <option></option>
                              <option></option>
                            </select>
                          </td>
                          <td>
                            <select class="form-select" name="status">
                              <option selected>Status</option>
                              <option>New</option>
                              <option>Pending</option>
                              <option>Completed</option>
                              <option>Cancled</option>
                            </select>
                          </td>
                          <td>
                            <input class="form-control" type="text" onfocus="(this.type='date')" placeholder="From Date"/>
                          </td>
                          <td>
                            <input class="form-control" type="text" onfocus="(this.type='date')" placeholder="To Date"/>
                          </td>
                          <td>
                            <button class="sample-btn">
                              Search
                            </button>
                          </td>
                          <td>
                            <button class="clear-btn">
                              Clear
                            </button>
                          </td>
                        </tr>
                      </table>
                    </div>
                  <table class="d-block table table-borderless ps-4 table-responsive-lg w-100">
                    <th>Service ID<img class="ps-2" src="view/assets/images/sort.png"></th>
                    <th>Service Date<img class="ps-2" src="view/assets/images/sort.png"></th>
                    <th>Customer Details<img class="ps-2" src="view/assets/images/sort.png"></th>
                    <th>Service Provider<img class="ps-2" src="view/assets/images/sort.png"></th>
                    <th>Status<img class="ps-2" src="view/assets/images/sort.png"></th>
                    <th>Action</th>
                      <tbody class="align-middle">
                          <tr>
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
                                <h6 class="bg-green text-white fw-normal">
                                    Active 
                                </h6>
                            </td>
                            <td>
                                <img src="view/assets/images/group-38.png"/>
                            </td>
                          </tr>
                      </tbody>
                  </table>
                  <div class="d-flex ps-4">
                      <p class="d-inline">Show 
                        <span class="m-2">
                           <select>
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option>5</option>
                               <option>6</option>
                               <option>7</option>
                               <option>8</option>
                               <option>9</option>
                               <option selected>10</option>
                           </select>
                        </span>
                        entries Total records:55</p>
                      <p class="ms-auto">
                        <span class="circle-btn">
                            <img src="view/assets/images/polygon-1-copy-5.png"/>
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
                            <img class="rotate-img" src="view/assets/images/polygon-1-copy-5.png"/>
                        </span>
                      </p>
                  </div>
                  <p class="ps-4">&copy; 2018 Helperland. All rights reserved.</p>
                </div>
        </section>
        <!--Dashboard over-->
    </body>
</html>