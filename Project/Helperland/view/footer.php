<?php

$base_url='http://localhost/Tatvasoft-Project/Project/Helperland/';

?>
<nav class="navbar">
              <span>
                  <img class="ps-1" src="view/assets\images\logo-small.png"/>
                  </span>
                  <span>
                  <ul class="nav px-4">
                  <li class="nav-item">
                      <a class="nav-link text-white" href="<?= $base_url.'?controller=User&function=home'?>">HOME</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="<?= $base_url.'?controller=User&function=about'?>">ABOUT</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="#">TESTIMONIALS</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="<?= $base_url.'?controller=User&function=faqs'?>">FAQS</a>
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
                  <img src="view/assets\images\ic-facebook.png"/>
                  <img class="ps-1 pe-5" src="view/assets\images\ic-instagram.png"/>
              </span>
          </nav>
          <div class="hori-line container pb-1"></div>
          <div class="container text-center pt-2 pb-2">
              <span class="text-white">@2018 Helperland All rights reserved</span>
              <span>&nbsp <a class="text-white" href="#">Terms and Conditions</a> <span class="sep px-1"></span> <a class="text-white" href="#">Privacy Policy</a></span>
          </div>