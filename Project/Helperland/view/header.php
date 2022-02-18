<?php

$base_url='http://localhost/Tatvasoft-Project/Project/Helperland/';
?>
<style>
  <?php include 'assets/header.css';?>
  </style>

<header class="homepage_bg">
<nav class="navbar navbar-expand-lg navbar-light navbar-bg">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?= $base_url.'?controller=User&function=home'?>"><img class="ps-3" src="view/assets/images/logo-small.png"/></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse position-relative" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item ps-2 py-1">
                <a class="text-decoration-none" Style="color:white;" href="<?= $base_url.'?controller=User&function=book'?>"><button class="book-btn px-4" value="Book a Cleaner">Book now</button></a>
                </li>
                <li class="nav-item ps-2 py-1">
                <a class="nav-link text-white hover-link" href="<?= $base_url.'?controller=User&function=prices'?>"><lable class="px-2">Prices and Services</lable></a>
                </li>
                <li class="nav-item ps-2 py-1">
                    <a class="nav-link text-white" href="#">Warranty</a>
                </li>
                <li class="nav-item ps-2 py-1">
                    <a class="nav-link text-white" href="#">Blog</a>
                </li>
                <li class="nav-item ps-2 py-1">
                    <a class="nav-link text-white" href="<?= $base_url.'?controller=User&function=contact'?>">Contact</a>
                </li>
                <li class="nav-item ps-2 py-1">
                     <button type="button" class="book-btn text-center" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            Login
                            </button>                    
                </li>
                <li class="nav-item ps-2 py-1">
                <a class="text-decoration-none" value="Book a Cleaner" href="<?= $base_url.'?controller=User&function=sp_sign_up'?>"><button class="book-btn px-4" value="Book a Cleaner">
                      Become a helper
                    </button></a>
                </li>
                </ul>
              </div>
            </div>
          </nav>
</header>