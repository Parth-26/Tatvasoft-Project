
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
                            <div class="dropdown">
  <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="view/assets/images/group-38.png"/>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="<?= $base_url.'?controller=User&function=delete_user'?>#">Edit & Reschedule</a></li>
    <li><a class="dropdown-item" href="<?= $base_url.'?controller=User&function=delete_user'?>#">Refund</a></li>
    <li><a class="dropdown-item" href="<?= $base_url.'?controller=User&function=delete_user'?>#">Cancle</a></li>
  </ul>
</div>
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
                        <nav aria-label="Page navigation example justify-content-end ms-auto">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><img src="view/assets/images/polygon-1-copy-5.png"/></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#"><img class="rotate-img" src="view/assets/images/polygon-1-copy-5.png"/></a>
    </li>
  </ul>
</nav>
</p>
                  </div>
                  <p class="ps-4">&copy; 2018 Helperland. All rights reserved.</p>
                </div>