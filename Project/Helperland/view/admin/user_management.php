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
                      <tbody class="align-middle"  id="tbody-user">
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
                                
                                <div class="dropdown">
  <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="view/assets/images/group-38.png"/>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="<?= $base_url.'?controller=User&function=delete_user'?>#">Delete</a></li>
  </ul>
</div>
                            </td>
                          </tr>
                      </tbody>
                  </table>
                  <div class="d-flex ps-4">
                      <p class="d-inline">Show 
                        <span class="m-2">
                           <select id="limit">
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