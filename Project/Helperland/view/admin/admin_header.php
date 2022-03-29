<header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-bg">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="<?= $base_url.'?controller=User&function=admin_dashboard'?>"><h2>helperland</h2></a>
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
                            <h5 class="text-white"><?php echo $_SESSION['name'] ?></h5>
                        </li>
                        <li class="nav-item d-flex justify-content-center pt-2">
                            <a href="<?= $base_url.'?controller=User&function=logout'?>" class="px-3">
                                <img src="view/assets/images/logout.png">
                            </a>
                        </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
