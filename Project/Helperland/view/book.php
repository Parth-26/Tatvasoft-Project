<!Doctype HTML>
<html>
    <head>
        <title>
            FAQs | Helperland
        </title>
        <link type="text/css" rel="stylesheet" href="view/assets/css/book.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="book.js"></script>
    </head>
    <body>
        
        <!--Navbar-->
        <?php
        include('header.php');
        ?>
        <!--book content-->
        <section>
        <div class="container-xl">
            <div class="text-center">
            <h2 class="pt-4">Book your cleaning service</h2>
            <span>
                <img class="pe-2" src="view/assets/images/rectangle-5.png"/>
                <img src="view/assets/images/forma-1-copy-5.png"/>
                <img class="ps-2" src="view/assets/images/rectangle-5.png"/>
            </span>
        </section>
        <section class="container pt-5">
            <div class="row book-service">
                <div class="col-lg-8 service-tab">
                    <!--<ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                          <a class="nav-link active-tab" id="step-1" href="#" onclick=makeactive(this) data-bs-toggle="tab" data-bs-target="#step-1-con" type="button" role="tab" aria-controls="step-1-con" aria-selected="true">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="step-2" href="#" onclick=makeactive(this) data-bs-toggle="tab" data-bs-target="#step-2-con" type="button" role="tab" aria-controls="step-2-con" aria-selected="false">Active 2</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" id="step-3" href="#" onclick=makeactive(this)>Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="step-4" href="#" onclick=makeactive(this)>Disabled</a>
                        </li>
                      </ul>
                      <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="step-1" id="step-1-con"><h2>step 1</h2></div>
                      <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="step-2" id="step-2-con"><h2>step 2</h2></div>
                      <div class="hide" id="step-2-con"><h2>step 2</h2></div>
                      <div class="hide" id="step-3-con"><h2>step 3</h2></div>
                      <div class="hide" id="step-4-con"><h2>step 4</h2></div>-->
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fill" id="service-setup-tab" data-bs-toggle="tab"
                                data-bs-target="#service-setup" type="button" role="tab" aria-controls="service-setup"
                                aria-selected="true">
                                <img src="view/assets/images/setup-service.png" alt="">
                                <span>Setup Service</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule"
                                type="button" role="tab" aria-controls="schedule" aria-selected="false">
                                <img src="view/assets/images/schedule.png" alt="">
                                <span>Schedule & Plan</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details"
                                type="button" role="tab" aria-controls="details" aria-selected="false">
                                <img src="view/assets/images/details.png" alt="">
                                <span>Your Details</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment"
                                type="button" role="tab" aria-controls="payment" aria-selected="false">
                                <img src="view/assets/images/payment.png" alt="">
                                <span>Make Payment</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="service-setup" role="tabpanel"
                            aria-labelledby="service-setup-tab">
                            <div class="show-title">
                                Setup Service
                            </div>
                            <div class="service-setup-content">
                                <form action="">
                                    <span>Enter your Postal Code</span>
                                    <div class="postal-code">
                                        <div class="form-group mb-2">
                                            <input type="text" class="form-control" placeholder="Postal code">
                                        </div>
                                        <div class="mx-2">
                                            <button type="submit" class="btn form-control">Check Availability</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade " id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                            <div class="show-title">
                                Schedule & Plan
                            </div>
                            <div class="service-schedule">
                                <form action="">
                                    <div class="service-time d-flex align-items-center flex-wrap bb">
                                        <div class="d-flex align-items-end flex-wrap">
                                            <div class="form-group">
                                                <label for="date">When do you need the cleaner?</label>
                                                <input type="date" class="form-control w-75">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-select" aria-label="bath">
                                                    <option selected value="1">1:00 PM</option>
                                                    <option value="2">2:00 PM</option>
                                                    <option value="3">3:00 PM</option>
                                                    <option value="4">4:00 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="date">How long do you need your cleaner to stay?</label>
                                            <select class="form-select w-50" aria-label="hrs">
                                                <option selected value="1">1 Hrs</option>
                                                <option value="2">2 Hrs</option>
                                                <option value="3">3 Hrs</option>
                                                <option value="4">4 Hrs</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="extra-service-section bb">
                                        <span>Extra Services</span>
                                        <div class="extra-service d-flex flex-wrap">
                                            <label>
                                                <input class="form-check-input" type="checkbox" value="3">
                                                <div class="service">
                                                    <img src="view/assets/images/3.png" alt="">
                                                </div>
                                                <span class="service-name">Inside cabinets</span>
                                            </label>
                                            <label>
                                                <input class="form-check-input" type="checkbox" value="5">
                                                <div class="service">
                                                    <img src="view/assets/images/5.png" alt="">
                                                </div>
                                                <span class="service-name">Inside fridge</span>
                                            </label>
                                            <label>
                                                <input class="form-check-input" type="checkbox" value="4">
                                                <div class="service">
                                                    <img src="view/assets/images/4.png" alt="">
                                                </div>
                                                <span class="service-name">Inside oven</span>
                                            </label>
                                            <label>
                                                <input class="form-check-input" type="checkbox" value="2">
                                                <div class="service">
                                                    <img src="view/assets/images/2.png" alt="">
                                                </div>
                                                <span class="service-name">Laundry wash & dry</span>
                                            </label>
                                            <label>
                                                <input class="form-check-input" type="checkbox" value="1">
                                                <div class="service">
                                                    <img src="view/assets/images/1.png" alt="">
                                                </div>
                                                <span class="service-name">Interior windows</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="comment bb">
                                        <span>Comments</span>
                                        <div class="">
                                            <textarea class="form-control" id="" rows="3"></textarea>
                                        </div>
                                        <div class="form-check my-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            I have pets at home
                                        </div>
                                    </div>
                                    <div class="continue-btn pt-4">
                                        <button type="submit"
                                            class="btn form-control w-auto px-4 float-end">Continue</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                            <div class="show-title">
                                Your Details
                            </div>
                            <div class="details pt-3">
                                <form action="">
                                    <span>Enter your contact details, so we can serve you in better way!</span>
                                    <div class="address bb">
                                        <ul>
                                            <li>
                                                <div>
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault">
                                                </div>
                                                <div>
                                                    <p><b>Address:</b> street 2 40, Troisdorf 53844</p>
                                                    <p><b>Phone number:</b> 9988556644</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault">
                                                </div>
                                                <div>
                                                    <p><b>Address:</b> street 2 40, Troisdorf 53844</p>
                                                    <p><b>Phone number:</b> 9988556644</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="add-address-btn">
                                            <button type="button" class="btn form-control w-auto px-4">+ Add New Address</button>
                                        </div>
                                        <div id="add-new-address">
                                            <div class="card card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="Streetname">Street name</label>
                                                            <input type="text" name="Streetname" class="form-control"
                                                                placeholder="Street name">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="Housename">House number</label>
                                                            <input type="text" name="Housenumber" class="form-control"
                                                                placeholder="House name">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="Postalname">Postal code</label>
                                                            <input type="text" name="Postalcode" class="form-control"
                                                                placeholder="Postal code">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="City">City</label>
                                                            <select class="form-select mb-3">
                                                                <option selected>Troisdrof</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="Phonenumber">Phone number</label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-text">+49</div>
                                                                <input type="text" class="form-control"
                                                                    placeholder="9988556644">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-wraper">
                                                    <button type="button" class="save">Save</button>
                                                    <button type="button" class="cancel">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="favorite-sp-section">
                                            <span class="bb">Your Favorite Service Provider</span>
                                            <div>You can choose your favorite service provider from the below list</div>
                                            <div class="favorite-sp-wraper">
                                                <div>
                                                    <label>
                                                        <input class="form-check-input" type="checkbox" value="3">
                                                        <div class="sp-avtar mb-1">
                                                            <img src="view/assets/images/cap.png" alt="">
                                                        </div>
                                                        <span class="sp-name">Sandip Patel</span>
                                                        <button type="button" class="btn select">Select</button>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="continue-btn pt-4">
                                        <button type="submit"
                                            class="btn form-control w-auto px-4 float-end">Continue</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                            <div class="show-title">
                                Make Payment
                            </div>
                            <div class="payment-details">
                                <form action="">
                                    <span>Pay securely with Helperland payment gateway!</span>
                                    <div class="promocode bb">
                                        <div class="form-group">
                                            <label for="">Promo code (optional)</label>
                                            <input type="text" class="form-control" placeholder="Promo code (optional)">
                                        </div>
                                        <div class="promo-apply px-2 pt-2">
                                            <button type="submit" class="btn w-auto px-4 form-control">Apply</button>
                                        </div>
                                    </div>
                                    <div class="card-details">
                                        <div class="card-number">
                                            <i class="fa fa-credit-card"></i>
                                            <input type="text" id="cnumber" placeholder="Card number">
                                        </div>
                                        <div class="card-expiry">
                                            <div>
                                                <input type="text" placeholder="MM/YY" id="expiry">
                                            </div>
                                            <div>
                                                <input type="text" placeholder="CVC" id="cvc">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Accpeted-cards">
                                        <span>Accpeted Cards:</span>

                                    </div>
                                    <div class="form-check my-4 bb">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        I accepted <a href="#">terms and conditions</a>, the <a href="#">cancellation
                                            policy</a> and the <a href="#">privacy policy</a>. I confirm that Helperland
                                        starts to execute the contract before the expiry of the withdrawal period and I
                                        lose my right of withdrawal as a consumer with full performance of the contract.
                                    </div>
                                    <div class="continue-btn pt-4">
                                        <button type="submit" class="btn form-control w-auto px-4 float-end">Complete
                                            Booking</button>
                                    </div>
                                </form>
                            </div>
                </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shadow pb-3">
                    <div class="border bg-blue border-1 text-center">
                        <label class="text-white p-3">Payment summary</label>
                    </div>
                    <div class="ms-2">
                        <span>16/2/2022</span><span class="ps-2">11:00</span>
                    </div>
                    <div class="ms-2">
                        <label class="fw-bold">length of time</label>
                        <div class="d-flex justify-content-between px-2">
                            <div class="d-inline">Basic</div>
                            <div class="d-inline">0 hrs</div>
                        </div>
                        <div class="mx-2 hori-line pt-2 pb-2"></div>
                        <div class="fw-bold d-flex justify-content-between px-2 py-1">
                            <p class="d-inline">Total service time</p>
                            <p class="d-inline start-100">3 hrs</p>
                        </div>
                    </div>
                    <div class="hori-line"></div>
                    <div class="fw-bold ms-2 d-flex justify-content-between px-2 py-4">
                        <label>Per Cleaning</label>
                        <label>&euro; 0.00</label>
                    </div>
                    <div class="hori-line"></div>
                    <div style="color: #1D7A8C;" class="ms-2 d-flex justify-content-between px-2 align-items-center">
                        <label>Total Price</label>
                        <label class="fs-1 fw-bold">&euro; 0.00</label>
                    </div>
                    <p class="ms-2">According to § 19 UStG no sales tax will be charged.</p>
                    <div class="ms-2 d-flex justify-content-between px-2">
                        <label>Effective Price</label>
                        <label>&euro; 0.00</label>
                    </div>
                    <p class="ms-2">
                        <span style="color:red;">*</span>Save 20% according to § 35a Income Tax Act (EStG).
                    </p>
                    <div class="ms-2 d-flex align-items-strech" style="background-color:#f3f3f3 ;">
                        <label>&#128522 Take a look at our included basic services</label>
                    </div>
                </div>
                <!--que-->
                <div class="py-5">
                    <h3 class="text-center">
                        Questions ?
                    </h3>
                    <div id="que1">
                        <a data-bs-toggle="collapse" href="#q1" role="button" aria-expanded="false" aria-controls="q1">
                          What is included in basic cleaning ?
                        </a>
                      <div class="collapse" id="q1">
                        <div>
                            Living room, bedroom and bathroom, kitchen and common areas.
                        </div>
                      </div>
                    </div>
                    <div id="que2">
                      <a data-bs-toggle="collapse" href="#q2" role="button" aria-expanded="false" aria-controls="q3">
                        Can I skip or move bookings ?
                      </a>
                    <div class="collapse" id="q2">
                      <div>
                        You can change a booking free of charge 48 hours before an assignment. If you want to skip an already booked assignment, we will credit the value of the booking to your account. You can use the credit for a future booking.
                      </div>
                    </div>
                </div>
                <div id="que3">
                    <a data-bs-toggle="collapse" href="#q3" role="button" aria-expanded="false" aria-controls="q1">
                        Do I have to be at home during cleaning ?
                      </a>
                    <div class="collapse" id="q3">
                      <div>
                        We recommend that you be at home for the first cleaning. This way you get to know your helper personally. You can also show him the rooms and respond to your wishes. Of course you can arrange an appointment or place for the key handover with your helper. With frequent bookings, some customers choose to leave a spare key to their cleaner.
                      </div>
                    </div>
                </div>
                <a href="faqs.html"> More quesions and answers</a>
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
            <!--Footer-->
            <footer class="bg-dark fixed">
                <nav class="navbar navbar-expanded-lg">
                    <span>
                        <img class="ps-3" src="view/assets/images/logo-small.png"/>
                        </span>
                        <span>
                        <ul class="nav px-4">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">TESTIMONIALS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">INSURANCE POLICY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">IMPRESSUM</a>
                        </li>
                        </ul>
                    </span>
                    <span>
                        <img src="view/assets/images/ic-facebook.png"/>
                        <img class="ps-3 pe-5" src="view/assets/images/ic-instagram.png"/>
                    </span>
                </nav>
                <div class="hori-line container pb-1"></div>
                <div class="container text-center pt-2">
                    <span class="text-white">@2018 Helperland All rights reserved</span>
                    <span>&nbsp <a class="text-white" href="#">Terms and Conditions</a> <span class="sep px-1"></span> <a class="text-white" href="#">Privacy Policy</a></span>
                </div>
              </footer>
        </div>
    </body>
</html>