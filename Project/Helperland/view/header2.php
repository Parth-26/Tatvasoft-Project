<header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-bg">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?= $base_url.'?controller=User&function=home'?>"><img class="ps-3" src="view/assets/images/logo-small.png"/></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse position-relative" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-flex justify-content-center">
                    <a href="<?= $base_url.'?controller=User&function=book'?>"><button class="book-btn py-1" value="Book a Cleaner">Book a Cleaner</button></a>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link text-white" value="Prices & Serices" href="<?= $base_url.'?controller=User&function=prices'?>">Prices & Serices</a>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link text-white" href="#">Warranty</a>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link text-white" href="#">Blog</a>
                    </li>
                    <li class="nav-item d-flex justify-content-center pe-3">
                        <a class="nav-link text-white" href="<?= $base_url.'?controller=User&function=contact'?>">Contact</a>
                        </li>
                        <li class="nav-item border-end border-start d-flex justify-content-center">
                            <a href="#" class="px-3">
                                <img src="view/assets/images/icon-notification.png">
                            </a>
                        </li>
                        <li class="nav-item d-flex justify-content-center">
                        <div class="btn-group px-3">
  <button type="button" class="btn btn-secondary" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
  <img src="view/assets/images/admin-user.png">
                        <img class="px-1" src="view/assets/images/sp-arrow-down.png">
  </button>
  <ul class="dropdown-menu dropdown-menu-lg-end">
      <li class="text-center"><p class="dropdown-item">
          <p>Welcome</p><?php echo $_SESSION['name'] ?>
</p></li>
  <?php
  $logout="$base_url.'?controller=User&function=logout";
  if($_SESSION['userdata']['UserTypeId']==1){
    $dashboard_path="$base_url.'?controller=User&function=consumer_dashboard";
    $acc_path="<?= $base_url.'?controller=User&function=my_acc";
    echo '<li><a href='.$dashboard_path.' class="dropdown-item" type="button">Dashboard</a></li>
    <li><a href='.$acc_path.' class="dropdown-item" type="button">My Settings</a></li>
    <li><a href='.$logout.' class="dropdown-item" type="button">Logout</a></li>';
  }
    elseif($_SESSION['userdata']['UserTypeId']==2)
    {
      $dashboard_path="$base_url.'?controller=User&function=sp_dashboard";
    $acc_path="$base_url.'?controller=User&function=my_acc";
    echo '<li><a href='.$dashboard_path.' class="dropdown-item" type="button">Dashboard</a></li>
    <li><a href='.$acc_path.' class="dropdown-item" type="button">My Settings</a></li>
    <li><a href='.$logout.' class="dropdown-item" type="button">Logout</a></li>';
    }
    elseif($_SESSION['userdata']['UserTypeId']==3)
    {
      $dashboard_path="$base_url.?controller=User&function=admin_dashboard";
    echo '<li><a href='.$dashboard_path.' class="dropdown-item" type="button">Dashboard</a></li>
    <li><a href='.$logout.' class="dropdown-item" type="button">Logout</a></li>';
    }
    ?>
  </ul>
</div>
                        </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>