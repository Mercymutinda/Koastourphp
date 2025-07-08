<?php

use yii\helpers\Url;

?>
<div class="header-top">
  <div class="container th-container">
    <div
      class="row justify-content-center justify-content-xl-between align-items-center">
      <div class="col-auto d-none d-md-block">
        <div class="header-links">
          <ul>
            <li class="d-none d-xl-inline-block">
              <i class="fa-sharp fa-regular fa-location-dot"></i>
              <span>Winnipeg MB, Canada</span>
            </li>
            <li class="d-none d-xl-inline-block">
              <i class="fa-regular fa-clock"></i>
              <span>Sun to Friday: 8.00 am - 7.00 pm</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-auto">
        <div class="header-right">
          <div class="currency-menu">

          </div>
          <div class="header-links">
            <ul>
              <li class="d-none d-md-inline-block">
                <a href="https://www.linkedin.com/in/kifaru-outdooradventures-19a62b362?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin-in text-primary fs-5"></i></a>
              </li>
              <li class="d-none d-md-inline-block">
                <a href="https://www.instagram.com/kifaru_koas?igsh=MWF0ZDh1bnZqb2tzbQ==" target="_blank"><i class="fab fa-instagram fs-5" style="color:rgb(233, 44, 138);"></i>
              </li>
              <li>
                <a href="https://youtube.com/@kifaruoutdooradventuressociety?si=CKaUfjLl-1jIggbP" target="_blank"><i class="fab fa-youtube fs-5 text-danger"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<header class="th-header header-layout1">
  <div class="sticky-wrapper">
    <div class="menu-area">
      <div class="container th-container">
        <div class="row align-items-center justify-content-between text-white" style="background-color: #113D48;">
          <div class="col-auto">
            <div class="header-logo">
              <a href="<?= Url::to(['site/index']) ?>"><img
                  src="<?= $basePath ?>assets/img/bg/logov3.png"
                  alt="KOAS"
                  class="m-0"
                  style="height:100px" /></a>
            </div>
          </div>
          <div class="col-auto me-xl-auto mx-lg-auto">
            <nav class="main-menu d-none d-xl-inline-block ">
              <ul>
                <li>
                  <a class="text-white fw-bold fs-5  " href="<?= Url::to(['site/index']) ?>">Home</a>
                </li>
                <li class="menu-item-has-children">
                  <a class="text-white fw-bold fs-5 ">About Us</a>
                  <ul class="sub-menu">
                    <li><a href="<?= Url::to(['site/about']) ?>">About Us</a></li>
                    <li><a href="<?= Url::to(['site/board']) ?>">Our Board</a></li>
                  </ul>
                </li>
                <li>
                  <a class="text-white fw-bold fs-5 " href="<?= Url::to(['site/services']) ?>">What We Do</a>
                </li>
                <li>
                  <a class="text-white fw-bold fs-5 " href="<?= Url::to(['site/impact']) ?>">Our Impact</a>
                </li>
                <li>
                  <a class="text-white fw-bold fs-5 " href="<?= Url::to(['site/contact']) ?>">Contact us</a>
                </li>

                <li class="menu-item-has-children">
                  <a class="text-white fw-bold fs-5 ">Support Us</a>
                  <ul class="sub-menu">
                    <li><a href="<?= Url::to(['site/support']) ?>">Support Us</a></li>
                    <li><a href="<?= Url::to(['site/donate']) ?>">Donate</a></li>
                    <li><a href="<?= Url::to(['site/volunteer']) ?>">Volunteer</a></li>
                    <li><a href="<?= Url::to(['site/partner']) ?>">Partner</a></li>

                  </ul>
                </li>
              </ul>
            </nav>
            <button type="button" class="th-menu-toggle d-block d-xl-none" data-bs-toggle="collapse"
              data-bs-target="#mobileMenu" aria-controls="mobileMenu"
              aria-expanded="false" aria-label="Toggle navigation">
              <i class="far fa-bars"></i>
            </button>
          </div>

          <!-- <div class="collapse d-xl-none" id="mobileMenu">
            <nav class="mobile-menu text-start py-3">
              <ul class="list-unstyled ">
                <li><a class="text-white fw-bold" href="<?= Url::to(['site/index']) ?>">Home</a></li>
                <li><a class="text-white fw-bold" href="<?= Url::to(['site/about']) ?>">About Us</a></li>
                <li><a class="text-white fw-bold" href="<?= Url::to(['site/services']) ?>">What We Do</a></li>
                <li><a class="text-white fw-bold" href="<?= Url::to(['site/impact']) ?>">Our Impact</a></li>
                <li><a class="text-white fw-bold" href="<?= Url::to(['site/contact']) ?>">Contact us</a></li>
                <li><a class="text-white fw-bold" href="<?= Url::to(['site/support']) ?>">Support Us</a></li>
                <li class="menu-item-has-children">
                  <a class="text-white fw-bold">Support Us</a>
                  <ul class="sub-menu">
                    <li><a href="<?= Url::to(['site/support']) ?>">Support Us</a></li>
                    <li><a href="<?= Url::to(['site/donate']) ?>">Donate</a></li>
                    <li><a href="<?= Url::to(['site/volunteer']) ?>">Volunteer</a></li>
                    <li><a href="<?= Url::to(['site/partner']) ?>">Partner</a></li>

                  </ul>
            </nav>
          </div> -->
          <div class="th-menu-wrapper onepage-nav">
      <div class="th-menu-area text-center">
        <button class="th-menu-toggle "><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
          
            <a href="<?= Url::to(['site/index']) ?>"><img
                  src="<?= $basePath ?>assets/img/bg/logo.svg"
                  alt="KOAS"
                  class="m-0"
                  style="height:100px" /></a>
          
        </div>
        <div class="th-mobile-menu" style="background-color: white !important; margin-top:0px !important;   height:100vh !important;">
          <ul>
          
          <li><a class="fw-bolder" href="<?= Url::to(['site/index']) ?>">Home</a></li>
          <li class="menu-item-has-children">
                  <a class=" fw-bolder  ">About Us</a>
                  <ul class="sub-menu">
                    <li><a href="<?= Url::to(['site/about']) ?>">About Us</a></li>
                    <li><a href="<?= Url::to(['site/board']) ?>">Our Board</a></li>
                  </ul>
                </li>
                <li><a class="fw-bolder" href="<?= Url::to(['site/services']) ?>">What We Do</a></li>
                <li><a class="fw-bolder" href="<?= Url::to(['site/impact']) ?>">Our Impact</a></li>
                <li><a class="fw-bolder" href="<?= Url::to(['site/contact']) ?>">Contact us</a></li>           
        
            <li class="menu-item-has-children">
                  <a class="fw-bolder">Support Us</a>
                  <ul class="sub-menu">
                    <li><a href="<?= Url::to(['site/support']) ?>">Support Us</a></li>
                    <li><a href="<?= Url::to(['site/donate']) ?>">Donate</a></li>
                    <li><a href="<?= Url::to(['site/volunteer']) ?>">Volunteer</a></li>
                    <li><a href="<?= Url::to(['site/partner']) ?>">Partner</a></li>

                  </ul>
          </ul>
        </div>
      </div>
    </div>
        </div>
      </div>
      <!-- <div class="logo-bg" data-mask-src="<?= $basePath ?>assets/img/logo_bg_mask.png"></div> -->
    </div>
  </div>
</header>

