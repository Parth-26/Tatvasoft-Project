<?php
include('controller/config.php');
?>
<!Doctype HTML>
<html>
    <head>
        <title>
            Admin | Helperland
        </title>
        <link type="text/css" rel="stylesheet" href="view/assets/css/admin_user_management.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--Navbar-->
        <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-bg">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="#"><h2>helperland</h2></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse position-relative" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                        <li class="nav-item d-flex justify-content-center pt-1">
                            <a href="#" class="px-3">
                                <img src="view/assets/images/admin-user.png">
                            </a>
                        </li>
                        <li class="nav-item d-flex justify-content-center pt-2">
                            <h5 class="text-white">James Smith</h5>
                        </li>
                        <li class="nav-item d-flex justify-content-center pt-2">
                            <a href="#" class="px-3">
                                <img src="view/assets/images/logout.png">
                            </a>
                        </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <!--Dashboard-->
        <section class="d-flex">
                <div class="vertical-menu">
                    <a href="<?= $base_url.'?controller=User&function=service_request'?>">Service Management</a>
                    <a href="#">User Management</a>
                    <a href="#">Coupon Code Management</a>
                    <a href="#">Escalation Management</a>
                    <a href="#">Service Requests</a>
                    <a href="#">Service Providers</a>
                    <a href="#">User Management</a>
                    <a href="#">Finance Module</a>
                    <a href="#">Zip Code Management</a>
                    <a href="#">Rating Management</a>
                    <a href="#">Inquiry Management</a>
                    <a href="#">Newsletter Management</a>
                    <a href="#">Content Management</a>
                  </div>
                  <div class="right-dashboard-bg w-100 pe-4">
                      <div class="d-flex">
                      <h3 class="ps-4 d-inline">User Management</h3>
                      <button class="sample-btn d-inline ms-auto"><img class="me-1" src="view/assets/images/add.png"/>Add new user</button>
                    </div>
                  <table class="d-block table table-borderless ps-4 table-responsive-lg w-100">
                        <th>User Name<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>User type</th>
                        <th>Role</th>
                        <th>Postal Code<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>City</th>
                        <th>Radius<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>User Status<img class="ps-2" src="view/assets/images/sort.png"></th>
                        <th>Action</th>
                      <tbody class="align-middle">
                          <tr>
                              <td>
                                Lyum Watson
                              </td>
                              <td>
                                  Call Center
                              </td>
                              <td>
                                  Inquiry Manager
                              </td>
                              <td>
                                  123456
                              </td>
                              <td>
                                  Berlin
                              </td>
                              <td>
                               
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
                          <tr>
                            <td>
                              John Smith
                            </td>
                            <td>
                                Call Center
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                123456
                            </td>
                            <td>
                                Berlin
                            </td>
                            <td>
                             10 km
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
                        <tr>
                            <td>
                              John Smith
                            </td>
                            <td>
                                Call Center
                            </td>
                            <td>
                                Inquiry Manager
                            </td>
                            <td>
                                123456
                            </td>
                            <td>
                                Berlin
                            </td>
                            <td>
                             
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
                        <tr>
                            <td>
                              John Smith
                            </td>
                            <td>
                                Call Center
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                123456
                            </td>
                            <td>
                                Berlin
                            </td>
                            <td>
                               
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
                        <tr>
                            <td>
                              John Smith
                            </td>
                            <td>
                                Call Center
                            </td>
                            <td>
                                Content Manager
                            </td>
                            <td>
                                123456
                            </td>
                            <td>
                                Berlin
                            </td>
                            <td>
                             
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
                        <tr>
                            <td>
                              John Smith
                            </td>
                            <td>
                                Call Center
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                123456
                            </td>
                            <td>
                                Berlin
                            </td>
                            <td>
                             
                          </td>
                          <td>
                              <h6 class="bg-red text-white fw-normal">
                                  Inactive 
                              </h6>
                          </td>
                          <td>
                              <img src="view/assets/images/group-38.png"/>
                          </td>
                        </tr>
                        <tr>
                            <td>
                              John Smith
                            </td>
                            <td>
                                Call Center
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                123456
                            </td>
                            <td>
                                Berlin
                            </td>
                            <td>
                             20 km
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
                        <tr>
                            <td>
                              John Smith
                            </td>
                            <td>
                                Call Center
                            </td>
                            <td>
                                Finance Manager
                            </td>
                            <td>
                                123456
                            </td>
                            <td>
                                Berlin
                            </td>
                            <td>
                             
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
                        <tr>
                            <td>
                              John Smith
                            </td>
                            <td>
                                Call Center
                            </td>
                            <td>
                               
                            </td>
                            <td>
                                123456
                            </td>
                            <td>
                                Berlin
                            </td>
                            <td>
                             
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
                        <tr>
                            <td>
                              John Smith
                            </td>
                            <td>
                                Call Center
                            </td>
                            <td>
                            </td>
                            <td>
                                123456
                            </td>
                            <td>
                                Berlin
                            </td>
                            <td>
                             
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